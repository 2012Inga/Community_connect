const Joi = require('joi');

const validate = (schema) => (req, res, next) => {
  const { error } = schema.validate(req.body);
  if (error) {
    return res.status(400).json({ message: `Validation Error: ${error.details[0].message}` });
  }
  next();
};

module.exports = validate;
