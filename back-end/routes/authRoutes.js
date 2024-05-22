const express = require('express');
const { register, login } = require('../controllers/authController');
const validate = require('../middleware/validate');
const Joi = require('joi');

const router = express.Router();

// Joi validation schemas
const registrationSchema = Joi.object({
  username: Joi.string().min(3).required(),
  password: Joi.string().min(6).required(),
});

const loginSchema = Joi.object({
  username: Joi.string().required(),
  password: Joi.string().required(),
});

// User registration
router.post('/register', validate(registrationSchema), register);

// User login
router.post('/login', validate(loginSchema), login);

module.exports = router;
