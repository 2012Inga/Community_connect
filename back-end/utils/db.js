const mysql = require('mysql');

// Create a class to connect to MySQL
class MySQLConnect {
    constructor() {
        // Define constants for MySQL connection
        const DB_HOST = process.env.DB_HOST || 'localhost';
        const DB_USER = process.env.DB_USER || 'root';
        const DB_PASSWORD = process.env.DB_PASSWORD || 'root password';    
        const DB_DATABASE = process.env.DB_DATABASE || 'community_connect';

        // Create the MySQL connection object based on the constants
        this.connection = mysql.createConnection({
            host: DB_HOST,
            user: DB_USER,
            password: DB_PASSWORD,
            database: DB_DATABASE
        });
    }

    connect() {
        // Connect to MySQL
        this.connection.connect((err) => {
            if (err) {
                console.error('Error connecting to MySQL:', err);
                return;
            }
            console.log('Connected to MySQL');
        });
    }
}

const dbConnect = new MySQLConnect();

function deleteEvent(eventId, callback) {
    const sql = `DELETE FROM Event WHERE event_id = ?`;
    dbConnect.connection.query(sql, [eventId], callback);
}

function createEvent(eventName, eventDescription, eventLocation, eventDate, callback) {
    const sql = `INSERT INTO Event (event_name, event_description, event_location, event_date) VALUES (?,?,?,?)`;
    const values = [eventName, eventDescription, eventLocation, eventDate];
    dbConnect.connection.query(sql, values, callback);
}

module.exports = { dbConnect, deleteEvent, createEvent };

