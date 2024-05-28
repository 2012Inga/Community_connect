<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Event Planner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    // Check if user is logged in
    $isLoggedIn = isset($_COOKIE['user']);
    $userEmail = $isLoggedIn ? $_COOKIE['user'] : '';
    ?>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="#">EventPlanner</a>
            </div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <?php if ($isLoggedIn): ?>
                <div class="user-options">
                    <a href="#profile" class="user-link" title="<?php echo $userEmail; ?>">Profile</a>
                    <a href="#cart" class="user-link" title="<?php echo $userEmail; ?>">Cart</a>
                    <a href="login/logout.php" class="user-link" title="<?php echo $userEmail; ?>">Logout</a>
                </div>
            <?php else: ?>
                <a href="login.php" class="cta-button">Login</a>
            <?php endif; ?>
            <div class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Bringing the Community Together, One Event at a Time</h1>
            <p class="hero-subtitle">Join us in creating unforgettable experiences.</p>
            <a href="#events" class="hero-button">Discover Events</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="about-title">About Us</h2>
                <p class="about-description">
                    Welcome to EventPlanner, your go-to solution for creating and managing community events. 
                    Our mission is to bring people together and foster a sense of community through well-organized 
                    and memorable events. Whether it's a small gathering or a large festival, we are here to help 
                    you every step of the way.
                </p>
            </div>
            <div class="about-image">
                <img src="image\about-image.jpg" alt="Community Event">
            </div>
        </div>
    </section>

    <section id="events" class="events">
        <div class="container">
            <h2 class="events-title">Upcoming Events</h2>
            <div class="events-grid">
                <div class="event-card">
                    <img src="image\event1.jpg" alt="Event 1">
                    <div class="event-info">
                        <h3 class="event-title">Community Picnic</h3>
                        <p class="event-date">June 15, 2024</p>
                        <p class="event-description">Join us for a day of fun, food, and games in the park!</p>
                    </div>
                </div>
                <div class="event-card">
                    <img src="image\event2.jpg" alt="Event 2">
                    <div class="event-info">
                        <h3 class="event-title">Charity Run</h3>
                        <p class="event-date">July 10, 2024</p>
                        <p class="event-description">Support a great cause and stay fit with our annual charity run.</p>
                    </div>
                </div>
                <div class="event-card">
                    <img src="image\event3.jpg" alt="Event 3">
                    <div class="event-info">
                        <h3 class="event-title">Summer Festival</h3>
                        <p class="event-date">August 22, 2024</p>
                        <p class="event-description">Enjoy live music, food stalls, and activities for all ages.</p>
                    </div>
                </div>
            </div>
            <a href="#all-events" class="events-button">View All Events</a>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <h2 class="features-title">Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="image\icon1.png" alt="Feature 1">
                    </div>
                    <h3 class="feature-title">Easy Event Management</h3>
                    <p class="feature-description">Effortlessly plan and organize your events with our user-friendly tools.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="image\icon2.png" alt="Feature 2">
                    </div>
                    <h3 class="feature-title">Customizable Invitations</h3>
                    <p class="feature-description">Create beautiful, personalized invitations to attract attendees.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <img src="image\icon3.png" alt="Feature 3">
                    </div>
                    <h3 class="feature-title">Real-Time Updates</h3>
                    <p class="feature-description">Stay informed with live updates and notifications about your events.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="testimonials-title">Testimonials</h2>
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <img src="image\person1.jpg" alt="Person 1" class="testimonial-image">
                    <p class="testimonial-quote">"EventPlanner made organizing our community picnic a breeze! Highly recommend."</p>
                    <h3 class="testimonial-name">John Doe</h3>
                </div>
                <div class="testimonial-card">
                    <img src="image\person2.jpg" alt="Person 2" class="testimonial-image">
                    <p class="testimonial-quote">"Thanks to EventPlanner, our charity run was a huge success. We couldn't have done it without them."</p>
                    <h3 class="testimonial-name">Jane Smith</h3>
                </div>
                <div class="testimonial-card">
                    <img src="image\person3.jpg" alt="Person 3" class="testimonial-image">
                    <p class="testimonial-quote">"The summer festival was amazing! EventPlanner took care of everything, and it was a hit."</p>
                    <h3 class="testimonial-name">Mary Johnson</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <h2 class="gallery-title">Gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="image\gallery1.jpg" alt="Gallery Image 1">
                </div>
                <div class="gallery-item">
                    <img src="image\gallery2.jpg" alt="Gallery Image 2">
                </div>
                <div class="gallery-item">
                    <img src="image\gallery3.jpg" alt="Gallery Image 3">
                </div>
                <div class="gallery-item">
                    <img src="image\gallery4.jpg" alt="Gallery Image 4">
                </div>
                <div class="gallery-item">
                    <img src="image\gallery5.jpg" alt="Gallery Image 5">
                </div>
                <div class="gallery-item">
                    <img src="image\gallery6.jpg" alt="Gallery Image 6">
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <h2 class="how-it-works-title">How It Works</h2>
            <p class="how-it-works-description">Creating and managing events has never been easier. Follow these simple steps:</p>
            <div class="steps">
                <div class="step">
                    <div class="step-icon">
                        <img src="image\step1-icon.png" alt="Step 1">
                    </div>
                    <h3 class="step-title">Step 1: Create an Account</h3>
                    <p class="step-description">Sign up for a free account to get started with planning your events.</p>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="image\step2-icon.png" alt="Step 2">
                    </div>
                    <h3 class="step-title">Step 2: Plan Your Event</h3>
                    <p class="step-description">Use our tools to plan every detail of your event, from invitations to scheduling.</p>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="image\step3-icon.png" alt="Step 3">
                    </div>
                    <h3 class="step-title">Step 3: Share and Enjoy</h3>
                    <p class="step-description">Share your event with the community and enjoy the experience together.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="contact-title">Get In Touch</h2>
            <p class="contact-description">We'd love to hear from you! Fill out the form below to get in touch with us.</p>
            <form class="contact-form">
                <input type="text" class="contact-input" placeholder="Your Name" required>
                <input type="email" class="contact-input" placeholder="Your Email" required>
                <input type="text" class="contact-input" placeholder="Subject" required>
                <textarea class="contact-input contact-textarea" placeholder="Your Message" required></textarea>
                <button type="submit" class="contact-button">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-title">Follow Us</h3>
                    <ul class="footer-socials">
                        <li><a href="#"><img src="image\facebook.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="image\twitter.png" alt="Twitter"></a></li>
                        <li><a href="#"><img src="image\instagram.png" alt="Instagram"></a></li>
                        <li><a href="#"><img src="image\linkedin.png" alt="LinkedIn"></a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-title">Contact Us</h3>
                    <p>Email: <a href="inganathi2001@gmail.com">inganathi2001@gmail.com</a></p>
                    <p>Phone: +27 62 702 8931</p>
                    <p>Address: 123 Event St, City, CapeTown</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 EventPlanner. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
