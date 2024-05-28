<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventPlanner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-toggle">
                <button id="login-toggle" class="active">Log In</button>
                <button id="signup-toggle">Sign Up</button>
            </div>
            <div class="form">
                <form id="login-form" class="active" action="login/login.php" method="post">
                    <h2>Log In</h2>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
                <form id="signup-form" action="login/signup.php" method="post">
                    <h2>Sign Up</h2>
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="submit-btn">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
