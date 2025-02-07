<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NewsDaily - Your Source for Daily News</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav>
      <div class="logo">NewsDaily</div>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <h1>Welcome to NewsDaily</h1>
      <p>Your trusted source for the latest news and updates</p>
    </section>

    <section class="categories">
      <h2>News Categories</h2>
      <div class="category-grid">
        <a href="category.php?category=technology" class="category-card">
          <img src="img/Technology.jpg" alt="Technology" class="category-image" />
          <div class="category-content">
            <h3>Technology</h3>
            <p>Latest in tech and innovation</p>
          </div>
        </a>
        <a href="category.php?category=sports" class="category-card">
          <img src="img/sports.png" alt="Sports" class="category-image" />
          <div class="category-content">
            <h3>Sports</h3>
            <p>Sports updates and highlights</p>
          </div>
        </a>
        <a href="category.php?category=business" class="category-card">
          <img src="img/business.jpg" alt="Business" class="category-image" />
          <div class="category-content">
            <h3>Business</h3>
            <p>Business and finance news</p>
          </div>
        </a>
        <a href="category.php?category=entertainment" class="category-card">
          <img src="img/entertaintment.jpg" alt="Entertainment" class="category-image" />
          <div class="category-content">
            <h3>Entertainment</h3>
            <p>Movies, music, and culture</p>
          </div>
        </a>
        <a href="category.php?category=science" class="category-card">
          <img src="img/Science.jpg" alt="Science" class="category-image" />
          <div class="category-content">
            <h3>Science</h3>
            <p>Scientific discoveries and research</p>
          </div>
        </a>
        <a href="category.php?category=politics" class="category-card">
          <img src="img/politics.jpg" alt="politics" class="category-image" />
          <div class="category-content">
            <h3>Politics</h3>
            <p>Scientific discoveries and research</p>
          </div>
        </a>
        <a href="category.php?category=health" class="category-card">
          <img src="img/health.jpg" alt="health" class="category-image" />
          <div class="category-content">
            <h3>Health</h3>
            <p>Scientific discoveries and research</p>
          </div>
        </a>
        <a href="category.php?category=world" class="category-card">
          <img src="img/world.jpg" alt="world" class="category-image" />
          <div class="category-content">
            <h3>world</h3>
            <p>Scientific discoveries and research</p>
          </div>
        </a>
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