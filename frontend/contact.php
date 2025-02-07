<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NewsDaily</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="logo">NewsDaily</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <h1>Contact Us</h1>
            <div class="contact-container">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions or feedback? We'd love to hear from you.</p>
                    <div class="info-item">
                        <h3>Email</h3>
                        <p>info@newsdaily.com</p>
                    </div>
                    <div class="info-item">
                        <h3>Phone</h3>
                        <p>+1 (555) 123-4567</p>
                    </div>
                    <div class="info-item">
                        <h3>Address</h3>
                        <p>123 News Street<br>Media City, ST 12345<br>United States</p>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>NewsDaily</h4>
                <p>Your trusted source for daily news</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Categories</h4>
                <ul>
                    <li><a href="technology.html">Technology</a></li>
                    <li><a href="sports.html">Sports</a></li>
                    <li><a href="business.html">Business</a></li>
                    <li><a href="entertainment.html">Entertainment</a></li>
                    <li><a href="science.html">Science</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NewsDaily. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>