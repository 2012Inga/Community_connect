document.addEventListener("DOMContentLoaded", () => {
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const signInContainer = document.getElementById('signIn');
    const signUpContainer = document.getElementById('signup');

    signUpButton.addEventListener("click", () => {
        signInContainer.style.display = "none";
        signUpContainer.style.display = "block";
    });

    signInButton.addEventListener("click", () => {
        signUpContainer.style.display = "none";
        signInContainer.style.display = "block";
    });

    const signUpForm = document.getElementById("signupForm");
    signUpForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        const formData = new FormData(signUpForm);
        try {
            const response = await axios.post("http://localhost:3000/register", {
                username: formData.get('username'),
                email: formData.get('email'),
                password: formData.get('password')
            });
            if (response.status === 200) {
                alert("Registration successful!");
                signInButton.click(); // Redirect to sign-in form
            } else {
                alert("Registration failed. Please try again.");
            }
        } catch (error) {
            console.error("Error during registration:", error);
            alert("An error occurred. Please try again later.");
        }
    });

    const signInForm = document.getElementById("signInForm");
    signInForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        const formData = new FormData(signInForm);
        try {
            const response = await axios.post("http://localhost:3000/login", {
                username: formData.get('username'),
                password: formData.get('password')
            });
            if (response.status === 200) {
                alert("Login successful!");
                // Redirect to dashboard
                window.location.href = '/dashboard';
            } else {
                alert("Incorrect username or password.");
            }
        } catch (error) {
            console.error("Error during login:", error);
            alert("An error occurred. Please try again later.");
        }
    });
});
