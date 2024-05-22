const mysql = require('mysql');
const bcrypt = require('bcrypt');

const UserSchema = new mongoose.Schema({
    username: {
        type: String,
        required: true,
        unique: true,
    },
    password: {
        type: String,
        required: true,
    },
});

// Hash password before saving
UserSchema.pre('save', async function (next) {
    // hash password only if it is modified or newly created
    if (!this.isModified('password')) {
        return next();
    }
    // generate a salt
    const salt = await bcrypt.genSalt();
    // hash password with salt
    const hashedPwd = await bcrypt.hash(this.password, salt);
    // replace the plain text password with the hashed password
    this.password = hashedPwd;
    // proceed to save the user
    return next();
});

// Method to compare passwords
UserSchema.methods.comparePassword = async function (candidatePassword) {
    return bcrypt.compareSync(candidatePassword, this.password);
};

module.exports = mongoose.model('User', UserSchema);
