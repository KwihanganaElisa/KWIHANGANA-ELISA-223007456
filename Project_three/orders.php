<?php
session_start();
$loginError = '';
$loggedInEmail = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plaza_hotel";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

$conn->query("CREATE TABLE IF NOT EXISTS orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    menu VARCHAR(200) NOT NULL,
    address TEXT NOT NULL,
    date DATE NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$conn->query("CREATE TABLE IF NOT EXISTS admins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) DEFAULT 'Admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$defaultAdminEmail = 'admin@plazahotel.com';
$defaultAdminPassword = '123';
$conn->query("INSERT IGNORE INTO admins (email, password, name) VALUES ('$defaultAdminEmail', '$defaultAdminPassword', 'Site Admin')");

if (isset($_POST['login'])) {
    $email = trim($_POST['admin_email']);
    $pass = trim($_POST['admin_password']);

    $stmt = $conn->prepare("SELECT password FROM admins WHERE email = ? LIMIT 1");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($storedPass);

    if ($stmt->fetch() && $pass === $storedPass) {
        $_SESSION['user'] = $email;
        header("Location: orders.php");
        exit;
    } else {
        $loginError = 'Invalid admin email or password. Please try again.';
    }
    $stmt->close();
}

$result = null;
if ($loggedInEmail) {
    $result = $conn->query("SELECT id, fullname, email, phone, menu, address, date, reg_date FROM orders ORDER BY reg_date DESC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plaza Hotel – All Orders</title>
  <link rel="stylesheet" href="style.css" />
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
      <li><a href="orders.php" class="active">Admin</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <div class="order-container">
    <?php if (!isset($loggedInEmail)): ?>
      <div class="order-form-card">
        <div class="form-title">Admin Login</div>
        <div class="gold-line"></div>
        <?php if (!empty($loginError)): ?>
          <div class="error-msg"><?php echo htmlspecialchars($loginError); ?></div>
        <?php endif; ?>
        <form action="orders.php" method="post">
          <div class="form-group">
            <label>Admin Email</label>
            <input type="email" name="admin_email" required />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="admin_password" required />
          </div>
          <input type="submit" name="login" class="submit-btn" value="Login to View Orders" />
        </form>
        <p class="session-note">Use password <strong>123</strong> to sign in.</p>
      </div>
    <?php else: ?>
      <div class="order-history-card">
        <div class="form-title">All Orders</div>
        <div class="gold-line"></div>
        <p class="session-note">Logged in as <strong><?php echo htmlspecialchars($loggedInEmail); ?></strong>. <a href="logout.php" class="logout-link">Logout</a></p>

        <?php if ($result && $result->num_rows > 0): ?>
          <table class="order-history-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Menu</th>
                <th>Date</th>
                <th>Order Time</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                  <td><?php echo htmlspecialchars($row['id']); ?></td>
                  <td><?php echo htmlspecialchars($row['fullname']); ?></td>
                  <td><?php echo htmlspecialchars($row['email']); ?></td>
                  <td><?php echo htmlspecialchars($row['menu']); ?></td>
                  <td><?php echo htmlspecialchars($row['date']); ?></td>
                  <td><?php echo htmlspecialchars($row['reg_date']); ?></td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>No orders have been placed yet.</p>
        <?php endif; ?>
      </div>
    <?php endif; ?>
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
      <a href="order.php">Order</a>
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
