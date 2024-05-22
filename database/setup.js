// database/setup.js

const { MongoClient } = require('mongodb');

async function setupDatabase() {
  const uri = 'mongodb://localhost:27017'; // Update with your MongoDB Atlas connection string if applicable
  const client = new MongoClient(uri);

  try {
    // Connect to the MongoDB server
    await client.connect();

    console.log('Connected to the MongoDB server');

    // Create or get reference to your MongoDB database
    const database = client.db('community_connect');

    // Create collections or perform other database setup tasks
    await createCollections(database);

    console.log('Database setup complete');
  } catch (error) {
    console.error('Error setting up database:', error);
  } finally {
    // Close the connection
    await client.close();
  }
}

async function createCollections(database) {
  // Create collections if they don't exist
  await database.createCollection('users');
  await database.createCollection('posts');
  // Add more collections as needed
}

// Run the setup function
setupDatabase();
