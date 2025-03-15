<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bon Hotel</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header-flex">
          <img src="assets/logo.png" alt="Logo" />
          <nav class="navigation">
            <a href="#first-section" class="nav-links">Our Hotel</a>
            <a href="#second-section" class="nav-links">Rooms & Rates</a>
            <a href="#third-section" class="nav-links">Facilities</a>
            <a href="newspage.html" class="nav-links">Contact Us</a>
          </nav>
        </div>
      </div>
    </header>

    <section class="first-section" id="first-section">
      <div class="first-section-content">
        <h1 class="main-title">WELCOME TO BON HOTEL</h1>
        <p class="description">Good people. Good thinking. Good feeling.</p>
        <a href="#" class="button">EXPLORE</a>
      </div>
    </section>

    <section class="second-section" id="second-section">
      <div class="container">
        <h2 class="secondary-title">Rooms & Rates</h2>
      </div>
      <div class="rooms-gallery">
        <?php
            $rooms = [
                ['image' =>
        'assets/standard twin room.png', 'title' => 'Standard Twin Room'],
        ['image' => 'assets/standard room.png', 'title' => 'Standard Room'],
        ['image' => 'assets/standard view room.png', 'title' => 'Standard View
        Room'], ['image' => 'assets/deluxe room.png', 'title' => 'Deluxe Room']
        ]; foreach ($rooms as $room): ?>
        <div class="rooms-card">
          <img
            src="<?= htmlspecialchars($room['image']) ?>"
            alt="<?= htmlspecialchars($room['title']) ?>"
          />
          <div class="overlay"></div>
          <div class="cards-content">
            <h3 class="card-title"><?= htmlspecialchars($room['title']) ?></h3>
            <a href="#" class="button button-small">Check Rates</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="third-section" id="third-section">
      <div class="container">
        <div class="contact-us">
          <h2 class="secondary-title">Get a room already!</h2>
          <a href="#" class="button">Book Now</a>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="footer-content">
          <img src="assets/footer logo.png" alt="Footer Logo" />
          <nav class="footer-nav">
            <a href="#" class="footer-nav-links">Our Hotels</a>
            <a href="#" class="footer-nav-links">Our Conferencing</a>
            <a href="#" class="footer-nav-links">Our Company</a>
            <a href="#" class="footer-nav-links">Hotel Design</a>
            <a href="#" class="footer-nav-links">Careers</a>
          </nav>
          <div class="footer-text">
            <p>Bon Hotels Head Office</p>
            <a href="tel:+27 434 344 432">+27 434 344 432</a>
            <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
