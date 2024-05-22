// routes/eventRoutes.js (updated to include email notification)
const express = require('express');
const router = express.Router();
const Event = require('../models/Event');
const sendEmail = require('../utils/email');

router.post('/book', (req, res) => {
    const { title, date } = req.body;
    const newEvent = new Event({
        title: title,
        date: date,
        bookedBy: req.user._id // Assuming user is authenticated and user object is available in req.user
    });
    newEvent.save((err, event) => {
        if (err) { return res.status(400).send('Bad Request'); }
        sendEmail(req.user.email,)
