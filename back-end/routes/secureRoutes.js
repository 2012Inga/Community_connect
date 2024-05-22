const express = require('express');
const authenticateToken = require('../middleware/auth');

const router = express.Router();

// Secure endpoint example
router.get('/profile', authenticateToken, (req, res) => {
  res.json({ message: `Welcome, ${req.user.username}` });
});

module.exports = router;
