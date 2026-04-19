<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Plaza Hotel – Contact Us</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

  <div class="header">
    <div>
      <a href="index.php" class="logo">PLAZA HOTEL</a>
      <div class="tagline">Luxury Hotel &amp; Resort</div>
    </div>

  </div>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="order.php">Order</a></li>
      <li><a href="orders.php">Orders</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php" class="active">Contact Us</a></li>
    </ul>
  </nav>

  <div class="contact-banner">
    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=1400&auto=format&fit=crop" alt="Hotel reception" />
    <div class="overlay">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you</p>
    </div>
  </div>

  <div class="contact-wrapper">

    <div class="contact-info">
      <h2>Get In Touch</h2>
      <div class="gold-line"></div>

      <div class="info-card">
        <i class="ico">&#9679;</i>
        <div>
          <h4>Address</h4>
          <p>123 Ocean Boulevard<br/>Miami, FL 33101, USA</p>
        </div>
      </div>
      <div class="info-card">
        <i class="ico">&#9679;</i>
        <div>
          <h4>Phone</h4>
          <p>+1 (800) 555-0199<br/>+1 (800) 555-0200 (Reservations)</p>
        </div>
      </div>
      <div class="info-card">
        <i class="ico">&#9679;</i>
        <div>
          <h4>Email</h4>
          <p>reservations@grandpalms.com<br/>info@grandpalms.com</p>
        </div>
      </div>
      <div class="info-card">
        <i class="ico">&#9679;</i>
        <div>
          <h4>Reception Hours</h4>
          <p>24 hours / 7 days a week<br/>Check-in: 3:00 PM &nbsp;|&nbsp; Check-out: 11:00 AM</p>
        </div>
      </div>
    </div>

    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <div class="gold-line"></div>

      <form action="process_contact.php" method="post">
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="fullname" required />
      </div>

      <div class="form-group">
        <label>Email Address</label>
        <input type="email" name="email" required />
      </div>

      <div class="form-group">
        <label>Phone Number</label>
        <input type="tel" name="phone" required />
      </div>

      <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" required />
      </div>

      <div class="form-group">
        <label>Your Message</label>
        <textarea name="message" required></textarea>
      </div>

      <input type="submit" class="send-btn" value="Send Message" />
      </form>
      <div class="success-msg" id="cSuccess">Your message has been sent. We will respond within 24 hours.</div>
    </div>

  </div>

  <footer>
    <div>
      <h4>Plaza Hotel</h4>
      <p>123 Ocean Boulevard</p>
      <p>Miami, FL 33101, USA</p>
      <p style="margin-top:8px;">+25000000000000</p>
    </div>
    <div>
      <h4>Quick Links</h4>
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="menu.php">Menu</a>
      <a href="gallery.php">Gallery</a>
      <a href="contact.php">Contact Us</a>
    </div>
    <div>
      <h4>Dining Hours</h4>
      <p>Breakfast: 6:30 AM – 10:30 AM</p>
      <p>Lunch: 12:00 PM – 3:00 PM</p>
      <p>Dinner: 6:00 PM – 11:00 PM</p>
    </div>
  </footer>
  <div class="footer-bottom">&copy; 2025 Plaza Hotel. All rights reserved.</div>

</body>
</html>
