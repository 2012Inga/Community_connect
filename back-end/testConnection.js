const mysql = require('mysql');

// Create a connection object
const connection = mysql.createConnection({
    host: 'localhost',    // Change this to your MySQL host
    user: 'root',         // Change this to your MySQL username
    password: 'Boyce1962@', // Change this to your MySQL password
    database: 'community_connect' // Change this to your MySQL database name
});

// Attempt to connect to the MySQL database
connection.connect((err) => {
    if (err) {
        console.error('Error connecting to MySQL:', err);
        return;
    }
    console.log('Connected to MySQL');
});

// Close the connection after testing
connection.end();
