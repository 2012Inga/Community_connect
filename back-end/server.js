const express = require('express');
const app = express();
const { dbConnect, deleteEvent, createEvent } = require('./utils/db');
const bodyParser = require('body-parser');
const passport = require('passport');
const LocalStrategy = require('passport-local').Strategy;
const session = require('express-session');
const bcrypt = require('bcrypt');
const mysql = require('mysql');
const port = 3000;

// Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
app.use(session({ secret: 'secret', resave: false, saveUninitialized: false }));
app.use(passport.initialize());
app.use(passport.session());

// Connection to MySQL
dbConnect.connect();

// MySQL Connection
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '', // Replace with your actual password
    database: 'community_connect',
});

connection.connect((err) => {
    if (err) {
        console.error('Error connecting to MySQL database:', err);
        return;
    }
    console.log('Connected to MySQL database');
});

// Passport Config
passport.use(new LocalStrategy(
    (username, password, done) => {
        connection.query('SELECT * FROM users WHERE username = ?', [username], (err, rows) => {
            if (err) return done(err);
            if (!rows.length) return done(null, false, { message: 'Incorrect username' });

            const user = rows[0];
            bcrypt.compare(password, user.password, (err, res) => {
                if (err) return done(err);
                if (res === false) return done(null, false, { message: 'Incorrect password' });
                return done(null, user);
            });
        });
    }
));

passport.serializeUser((user, done) => {
    done(null, user.id);
});

passport.deserializeUser((id, done) => {
    connection.query('SELECT * FROM users WHERE id = ?', [id], (err, rows) => {
        if (err) return done(err);
        done(null, rows[0]);
    });
});

// Express Routes
app.get('/', (req, res) => {
    res.send('Welcome to Community Connect!');
});

app.get('/login', (req, res) => {
    res.send('This is the login page. Use POST /login to log in.');
});

app.get('/register', (req, res) => {
    res.send('This is the register page. Use POST /register to create an account.');
});

app.get('/events', (req, res) => {
    res.send('This is the events page. Use POST /events to create an event.');
});

app.post('/login', (req, res, next) => {
    passport.authenticate('local', (err, user, info) => {
        if (err) return next(err);
        if (!user) return res.status(401).json({ message: 'Incorrect username or password' });

        req.logIn(user, (err) => {
            if (err) return next(err);
            return res.json({ message: 'Login successful', redirectUrl: '/dashboard' });
        });
    })(req, res, next);
});

app.post('/register', (req, res) => {
    bcrypt.hash(req.body.password, 10, (err, hash) => {
        if (err) return res.status(500).json({ message: 'Server error' });
        const newUser = {
            username: req.body.username,
            password: hash
        };
        connection.query('INSERT INTO users SET ?', newUser, (err, result) => {
            if (err) return res.status(500).json({ message: 'User registration failed' });
            res.json({ message: 'Registration successful', redirectUrl: '/login' });
        });
    });
});

app.get('/dashboard', (req, res) => {
    if (req.isAuthenticated()) {
        res.json({ message: 'Welcome to your dashboard' });
    } else {
        res.status(401).json({ message: 'Not authenticated', redirectUrl: '/login' });
    }
});

// Delete an event route
app.delete('/events/:eventId', (req, res) => {
    const eventId = req.params.eventId;
    deleteEvent(eventId, (err, result) => {
        if (err) {
            res.status(500).json({ message: 'Error deleting event' });
        } else {
            res.json({ message: 'Event deleted successfully' });
        }
    });
});

// Create a new event route
app.post('/events', (req, res) => {
    const { eventName, eventDescription, eventLocation, eventDate } = req.body;
    createEvent(eventName, eventDescription, eventLocation, eventDate, (err, result) => {
        if (err) {
            res.status(500).json({ message: 'Error creating event' });
        } else {
            res.json({ message: 'Event created successfully' });
        }
    });
});

// Start server
app.listen(port, '0.0.0.0', () => {
    console.log(`Server is running at http://localhost:${port}`);
});
