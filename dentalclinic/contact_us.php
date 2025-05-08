<?php

include "db_connection.php";

if(isset($_POST['send'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $add_data = "INSERT INTO messages ( email, name,subject,message)
                  VALUES('$email','$name' , '$subject','$message')";
  $added = mysqli_query($connected , $add_data);

  if( $added){
      echo '<div class="alert alert-success" role="alert">Message is delivered</div>';
  }else{
      echo '<div class="alert alert-success" role="alert">Something Went Wrong</div>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - Dental Clinic</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">  <style>
    body {
      background-color: #f8f9fa;
    }
    .contact-header {
      text-align: center;
      margin-bottom: 50px;
    }
    .contact-form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .contact-form input, .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .contact-form button {
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
    }
    .contact-form button:hover {
      background-color: #0056b3;
    }
    .contact-info {
      margin-top: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .contact-info div {
      text-align: center;
    }
    .map-container {
      margin-top: 50px;
    }
    iframe {
      width: 100%;
      height: 400px;
      border: none;
      border-radius: 10px;
    }
    .fixed-back-button {
      position: fixed;
      z-index: 1;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 16px;
}

.fixed-back-button:hover {
  background-color: #0056b3;
}

body {
  padding-bottom: 80px; 
}

  </style>
</head>
<body>
<a href="index.php">
  <button style="bottom:20px; right: 1px;" class="ml-5 btn btn-primary fixed-back-button">Go to Home</button>
</a>
  <div class="container mt-5 mb-3">
    <div class="contact-header">
      <h2>Contact Us</h2>
      <p>Feel free to reach out to us for any inquiries or appointments.</p>
    </div>

    <div class="contact-form">
      <h4>Get in Touch</h4>
      <form action="" method="post">
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button name="send" type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <div>
        <h5>Address</h5>
        <p>1234 Dental Clinic St, City, Country</p>
      </div>
      <div>
        <h5>Phone</h5>
        <p>+123 456 7890</p>
      </div>
      <div>
        <h5>Email</h5>
        <p>contact@dentalclinic.com</p>
      </div>
    </div>

    <div class="map-container">
      <h4>Find Us on the Map</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.4246366620694!2d144.95373631531633!3d-37.81720937975128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4f9f9efdfb%3A0x5045675218ce6e0!2sRoyal%20Melbourne%20Hospital!5e0!3m2!1sen!2sau!4v1630720201590!5m2!1sen!2sau" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
<a href="patient_msg.php">
  <button style="top:60px; left:20px;" class=" btn btn-primary fixed-back-button">Go to Patient Messages</button>
</a>

  <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
