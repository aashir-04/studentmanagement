<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{


    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <style>
.about-section {
  background-color: #f9fafc;
  padding: 50px 0;
  text-align: center;
}

.about-container {
  max-width: 900px;
  margin: 0 auto;
  padding: 0 20px;
}

.about-section h2 {
  color: #004d7a;
  font-size: 28px;
  margin-bottom: 20px;
}

.about-section p {
  color: #444;
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 20px;
}

.mission-vision {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  margin-top: 30px;
}

.mission, .vision {
  flex: 1 1 40%;
  background-color: #ffffff;
  border-radius: 10px;
  padding: 25px;
  margin: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.mission h3, .vision h3 {
  color: #007bff;
  margin-bottom: 10px;
}




</style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">BrightPath Academy</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#admission">Admission</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <section id="home" class="home-section">
    <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b" class="banner-img" alt="Students Banner" width="100%" height="100%"  >
    <div class="home-content">
        <h1>Welcome to BrightPath Academy</h1>
        <p>Manage admissions, student records, and more efficiently.</p>
        <a href="#admission" class="btn-start">Get Started →</a>
    </div>
</section>
<section class="about-section">
  <div class="about-container">
    <h2>About BrightPath Academy</h2>
    <p>
      At <strong>BrightPath Academy</strong>, we are dedicated to empowering students through
      quality education and innovative learning experiences. Our mission is to foster
      academic excellence and personal growth in every student we teach.
    </p>
    <div class="mission-vision">
      <div class="mission">
        <h3>Our Mission</h3>
        <p>
          To provide a dynamic and inclusive environment where students can explore their
          potential, build confidence, and achieve their goals through guidance and mentorship.
        </p>
      </div>
      <div class="vision">
        <h3>Our Vision</h3>
        <p>
          To be a leading educational institution that nurtures future leaders equipped with
          knowledge, creativity, and values to make a positive impact on the world.
        </p>
      </div>
    </div>
  </div>
</section>

    <!-- Admission Section -->
    <section id="admission" class="admission-section">
        <h2>Admission Form</h2>
        <form action=" data_check.php" method="POST"class="admission-form">
            <label>Name:</label>
            <input type="text" name="name" placeholder="Enter your full name" required>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Phone:</label>
            <input type="tel" name="phone" placeholder="Enter phone number" required pattern=
            "[0-9]{11}">

            <label>Message:</label>
            <textarea placeholder="Enter your message" name="message" required></textarea>

            <button type="submit" name="submit">Submit</button>
        </form>
    </section>

    

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Us</h2>
        <p>Email: info@studentsystem.com</p>
        <p>Phone: +92-300-1234567</p>
        <p>Address: Karachi, Pakistan</p>
    </section>

    <footer>
        <p>&copy; 2025 Student Management System | All Rights Reserved</p>
    </footer>

    <!-- Basic JS for Search -->
    <script>
        function searchStudent() {
            const input = document.getElementById('searchBox').value.toLowerCase();
            const students = ['ali', 'ahmad', 'fatima', 'sara'];
            const result = document.getElementById('searchResult');
            if (students.includes(input)) {
                result.textContent = "Student Found: " + input.toUpperCase();
                result.style.color = "green";
            } else {
                result.textContent = "No record found.";
                result.style.color = "red";
            }
        }
    </script>

</body>
</html>


    
</body>
</html>