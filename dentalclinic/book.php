<?php
  include "db_connection.php";

  if(isset($_POST['send'])){

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $add_data = "INSERT INTO patients (fullname ,phone, email, service,date,time)
                    VALUES('$fullname' , '$phone' ,'$email', '$service','$date','$time')";
    $added = mysqli_query($connected , $add_data);

    if( $added){
        echo '<div class="alert alert-success" role="alert">Appointment is booked</div>';
    }else{
        echo '<div class="alert alert-success" role="alert">Something Went Wrong</div>';
    }
  }

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./images/logo.png">
  <title>Dental Appointment Booking</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .appointment-form {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    h2 {
      margin-bottom: 25px;
    }
    .fixed-back-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
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
  <button class="btn btn-primary fixed-back-button">Go to Home</button>
</a>

<div class="container">
  <div class="appointment-form">
    <h2 class="text-center">Book Your Appointment</h2>
    <form method="post">
      <div class="mb-3">
        <label for="fullname" class="form-label">Full Name</label>
        <input type="text" name="fullname" class="form-control" id="name" placeholder="Enter your full name" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" name="phone" class="form-control" id="phone" placeholder="e.g. 0123456789" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="your@email.com">
      </div>
      <div class="mb-3">
        <label for="service" class="form-label">Select Service</label>
        <select class="form-select"name="service" id="service" required>
          <option value="">-- Choose a service --</option>
          <option>Teeth Cleaning</option>
          <option>Dental Checkup</option>
          <option>Orthodontics</option>
          <option>Implants</option>
          <option>Whitening</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Appointment Date</label>
        <input type="date" name="date" class="form-control" id="date" required>
      </div>
      <div class="mb-3">
        <label for="time" class="form-label">Appointment Time</label>
        <input type="time" name="time" class="form-control" id="time" required>
      </div>
      <div class="d-grid">
        <button type="submit" name="send" class="btn btn-primary btn-lg">Book Appointment</button>
      </div>
    </form>
  </div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
