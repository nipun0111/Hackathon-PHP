<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Hackathon 2024</h1>
            </div>
            <ul class="nav-links">
                <li><a href="about.htm">About</a></li>
                <li><a href="login.php">Schedule</a></li>
                <li><a href="#register">Register</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero ">
        <div class="hero-text">
            <h2>Join the Ultimate Hackathon Event</h2>
            <p>Collaborate, Create, and Compete in the Most Exciting Tech Event of the Year!</p>
            <a href="#register" class="cta-btn">Register Now</a>
        </div>
    </section>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1900" data-bs-pause="hover" style="margin-top:20px;">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="i1.jpeg" alt="Robo Fight" class="d-block" style="border-radius: 8px;width: auto; height:400px;margin:auto">
        <div class="bottomright">Robo Fight</div>
    </div>
    <div class="carousel-item">
        <img src="i2.webp" alt="Line Follow" class="d-block" style="border-radius: 8px;width: auto; height:400px;margin:auto">
        <div class="bottomright">Line Follow</div>
    </div>
    <div class="carousel-item">
        <img src="i3.jpg" alt="Obstacle Avoidance" class="d-block" style="border-radius: 8px;width: auto; height:400px;margin:auto">
        <div class="bottomright">Obstacle Avoidance</div>    
    </div>
    <div class="carousel-item">
        <img src="i4.jpg" alt="RoboSoccer" class="d-block" style="border-radius: 8px;width:auto; height:400px;margin:auto">
        <div class="bottomright">RoboSoccer</div>
    </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    </button>
    </div>

    <section id="register" class="register-section hero-text">
        <h2>Register Now</h2>
        <p><strong>Don’t miss out! Register your team today to secure your spot in the competition.</strong></p>
        <div class="bg">
            <form id="registrationForm" action="index.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required placeholder="NAME">
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="abc@gmail.com">

                <label for="pwd">Create Password:</label>
                <input type="password" id="pwd" name="pwd" required placeholder="minimun 8 characters">
                
                <label for="teamName">Team Name:</label>
                <input type="text" id="teamName" name="teamName" required placeholder="XYZ">

                <label for="activity">Activity:</label>
                <select class="sel" id="activity" name="activity" required>
                    <option value="">-- Select an option --</option>
                    <option value="robofight">Robofight</option>
                    <option value="linefollow">Line Follow</option>
                    <option value="obstacleavoidance">Obstacle Avoidance</option>
                    <option value="robosoccer">RoboSoccer</option>
                </select>
                
                <label for="members">Team Members:</label>
                <input type="number" id="members" name="members" min="1" max="5" required placeholder="  1-5">
        
                <button type="submit" name="register">Submit</button>
            </form>
        </div>
        <p id="successMessage" style="display:none; color: rgb(219, 170, 249);">Thank you for Registering!!!</p>
    </section>
    
    <!-- <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const teamName = document.getElementById('teamName').value;
            const members = document.getElementById('members').value;
    
            if (name && email && teamName && members > 0) {
                document.getElementById('successMessage').style.display = 'block';
                alert('Registered Successfully');
    
                document.getElementById('registrationForm').reset();
    
            } else {
                alert('Please fill in all fields correctly.');
            }
        });
    </script> -->

    <footer>
        <p>&copy; 2024 Hackathon Event</p>
        <div class="footerMiddle">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div>
                <p3>
                  Hearts With Fingers Marketing Private Limited
                </p3>
              
              </div>
              <h6 class="footer-title"><br>Registered Office Address</h6>
              <div class="footer-contact mb-20">
                <ul>
                  <li>
                    <a href="https://maps.app.goo.gl/39CKxHgMxvA7truSA" target="_blank">
                      <span><p3>Mahima Panorama, Jagatpura, Jaipur-302017,<br>Rajasthan, INDIA</p3></span>
                    </a>
                  </li>
                  <li>
                    <a href="tel:+91 9887016863">
                    <i class="fa fa-mobile"></i>
                    <span><p3>+91 9887016863</p3></span>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:snipun2004@gmail.com">
                      <i class="fa fa-envelope"></i>
                      <span><p3>snipun2004@gmail.com</p3></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <h6 class="footer-title">Can we help you?</h6>
              <div class="footer-list">
                <ul>
                  <li>
                    <a href="#">FAQs</a>
                  </li>
                  <li>
                    <a href="#">Track Order</a>
                  </li>
                  <li>
                    <a href="#">Shipping & Returns</a>
                  </li>
                  <li>
                    <a href="#">Terms of Service</a>
                  </li>
                  <li>
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="#">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-6">
              <h6 class="footer-title">Get to know us</h6>
              <div class="footer-list">
                <ul>
                  <li>
                    <a href="#">About Us</a>
                  </li>
                  <li>
                    <a href="#">Our Story</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                  <li>
                    <a href="#">Why heartswithfingers?</a>
                  </li>
                  <li>
                    <a href="#">Press</a>
                  </li>
                </ul>
              </div>
              <h6 class="footer-title">Let's be friends</h6>
              <div class="footer-list">
                <ul>
                  <li>
                    <a href="#">Partner with Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <h6 class="footer-title">Newsletter</h6>
              <p2>
                Subscribe for special offers, newsletters and become a part of our movement
              </p2>
              <br>
              <div class="subscribe-form mb-4">
                <input type="email" class="email newsletterRequired" placeholder="Enter you email here..." name="newsletter_email" value>
                <div class="subscribe-button">
                  <input class="button" type="button" name="subscribe" value="Subscribe">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
    </footer>

    <?php

    if (isset($_POST['register'])) {

    $conn = new mysqli("localhost", "root", "", "hackathon"); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $pwd = $conn->real_escape_string($_POST['pwd']);
    // $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT); // secure hash
    $teamName = $conn->real_escape_string($_POST['teamName']);
    $members = $conn->real_escape_string($_POST['members']);
    $activity = $conn->real_escape_string($_POST['activity']);
    
    $sql = "INSERT INTO team (name, email, pwd, teamName, members, activity) 
            VALUES ('$name', '$email', '$pwd', '$teamName', '$members', '$activity')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='text-align:center;color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='text-align:center;color:red;'>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
</body>
</html>