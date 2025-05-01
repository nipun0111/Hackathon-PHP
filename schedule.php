<?php
session_start();

if (!isset($_SESSION['name'])) {
    echo "You must be logged in to view this page.";
    exit();
}

// DB Connection
$conn = new mysqli("localhost", "root", "", "hackathon");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query for team data associated with the logged-in user
$name = $_SESSION['name'];
$sql = "SELECT name, activity, members, email FROM team WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Schedule - Hackathon 2024</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e1e3f, #3a0ca3, #7209b7);
      color: white;
    }
    header nav {
      background: linear-gradient(135deg, #1e1e3f, #3a0ca3, #7209b7);
      padding: 10px 20px;
    }
    .nav-links a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-weight: bold;
    }
    .container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
    }
    h2 {
      text-align: center;
      color: #ffeeff;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      overflow: hidden;
    }
    th, td {
      padding: 15px;
      text-align: left;
    }
    th {
      background-color: rgba(0, 0, 0, 0.4);
      color: #ffffff;
    }
    tr:nth-child(even) {
      background-color: rgba(255, 255, 255, 0.05);
    }
    tr:hover {
      background-color: rgba(255, 255, 255, 0.15);
    }
    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.3);
    }
    .hero-text ul {
      list-style: none;
      padding: 0;
    }
    .hero-text li {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <h1 style="color: white;">Hackathon 2024</h1>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.htm">About</a></li>
        <li><a href="contact.htm">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- <?php if (isset($_SESSION['name'])): ?>
    <div style="text-align: center; margin-top: 20px; font-size: 20px; color: #ffeeff;">
        👋 Welcome, <strong><?php echo htmlspecialchars($_SESSION['name']); ?></strong>!
    </div>
<?php endif; ?> -->
<div class="container">
    <h2>👋 Welcome, <?php echo htmlspecialchars($name); ?>! Here's your team info:</h2>

    <?php if ($result->num_rows > 0): ?>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Activity</th>
          <th>Members</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $email= $_SESSION['email'];
        $sql = "SELECT * FROM team WHERE email='$email'";
        $result = $conn->query($sql);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row):
        ?>
          <tr>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['activity']); ?></td>
            <td><?php echo htmlspecialchars($row['members']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
      <p>No records found.</p>
    <?php endif; ?>

  </div>
  <section class="schedule">
    <div class="hero-text" style="text-align:center; margin-top: 20px;">
      <h2>Event Schedule</h2>
      <ul>
        <li><strong>Day 1:</strong> Opening ceremony, team formation, ideation sessions</li>
        <li><strong>Day 2:</strong> Coding and development, workshops, mentorship</li>
        <li><strong>Day 3:</strong> Final presentations, judging, awards ceremony</li>
      </ul>
    </div>
  </section>
  <footer>
    <p>&copy; 2024 Hackathon Event</p>
  </footer>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>