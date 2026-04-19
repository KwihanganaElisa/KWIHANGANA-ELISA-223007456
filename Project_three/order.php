<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Plaza Hotel – Order Online</title>
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
      <li><a href="order.php" class="active">Order</a></li>
      <li><a href="orders.php">Orders</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <div class="order-banner">
    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1400&auto=format&fit=crop" alt="Fine dining" />
    <div class="overlay">
      <h1>Order Online</h1>
      <p>Pre-order your meal · Room service · Table reservation</p>
    </div>
  </div>

  <div class="order-container">
      <div class="order-form-card">
        <div class="form-title">Place Your Order</div>
        <div class="gold-line"></div>
        <p class="session-note">Orders can be placed without login. Admin can check orders on the <a href="orders.php">Admin</a> page.</p>
        <form action="process_order.php" method="post">
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
            <label>Select Menu</label>
            <select name="menu" required>
              <option value="">-- Select Menu Item --</option>
              <option value="Grilled Atlantic Salmon">Grilled Atlantic Salmon – $28</option>
              <option value="Lobster Thermidor">Lobster Thermidor – $56</option>
              <option value="Fish & Chips">Fish & Chips – $22</option>
              <option value="Prawn Cocktail">Prawn Cocktail – $18</option>
              <option value="Tuna Tartare">Tuna Tartare – $32</option>
              <option value="Plaza Signature Cocktail">Plaza Signature Cocktail – $16</option>
              <option value="Classic Mojito">Classic Mojito – $12</option>
              <option value="Tropical Sunshine Juice">Tropical Sunshine Juice – $9</option>
              <option value="Green Detox Juice">Green Detox Juice – $8</option>
              <option value="Fresh Orange Juice">Fresh Orange Juice – $6</option>
            </select>
          </div>

          <div class="form-group">
            <label>Address</label>
            <textarea name="address" required></textarea>
          </div>

          <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" required />
          </div>

          <input type="submit" class="submit-btn" value="Place My Order" />
        </form>
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
