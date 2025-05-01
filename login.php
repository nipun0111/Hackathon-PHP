<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Hackathon 2024</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e1e3f, #3a0ca3, #7209b7);
      color: white;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 60vh;
      margin-top: 30px;
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      padding: 40px;
      width: 320px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #ffecec;
    }

    .login-box input[type="email"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 12px 15px;
      margin: 10px 0 20px;
      border: none;
      border-radius: 8px;
      font-size: 15px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background: #ff4edb;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .login-box button:hover {
      background: #da3ac5;
    }

    header nav {
      background-color: rgba(0, 0, 0, 0.3);
      padding: 10px 20px;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-weight: bold;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.3);
    }

    .error {
      color: #ffbaba;
      background: rgba(255, 0, 0, 0.2);
      padding: 10px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 15px;
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


  <section class="login-container">
    <div class="login-box">
      <h2>Login</h2>

      <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>

      <form method="post" action="login.php">
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="pwd" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 Hackathon Event</p>
  </footer>

  <?php
session_start();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "hackathon");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    


    $pass= '';
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $_POST['pwd'];


    $sql = "SELECT * FROM team WHERE email='$email' and pwd='$pass'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows >0) {
        $row = $result->fetch_assoc();
        
        // if (password_verify($pass,$row['pwd'])) {
        if ($row['pwd']==$pass) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header("Location: schedule.php");
            exit();
        } else {
            $error = "❌ Incorrect password!";
        }
    } else {
        $error = "❌ Email not found!";
    }

    $conn->close();
}
?>

</body>
</html>
