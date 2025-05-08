<?php
  include "db_connection.php";

  if (isset($_GET['update'])) {

    $patient_id =$_GET['update'];
    $select_query = "SELECT * FROM patients WHERE patient_id  = $patient_id";
    $select_run = mysqli_query($connected, $select_query);
    $selected = mysqli_fetch_assoc($select_run);


    if (isset($_POST['Update'])) {
      $fullname = $_POST['fullname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $service = $_POST['service'];
      $date = $_POST['date'];
      $time = $_POST['time'];

        $add_update = "UPDATE patients SET fullname = '$fullname' , phone = '$phone'
                        , email = '$email', service = '$service', date = '$date', time = '$time'  WHERE patient_id = $patient_id ";
        $updated = mysqli_query($connected , $add_update );
        if( $updated){
            echo "<h1 class='text-info text-center'> The appointment is updated  </h1>";
        }
        else{
            echo "<h1 class='text-info text-center'> Error in Updating the appointment   </h1>";
        }
    }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Customer Data</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .update-form {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    .btn-back {
      position: absolute;
      top: 20px;
      left: 20px;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .btn-back:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

    <button class="btn btn-primary btn-back" onclick="window.location.href='table.php'">Back to Table</button>

<div class="container">
  <div class="update-form">
    <h2 class="text-center">Update Customer Information</h2>
    <form id="updateForm" method="post">
      <div class="mb-3">
        <label>Full Name</label>
        <input type="text" name="fullname" class="form-control"  value="<?php echo isset($selected['fullname']) ? $selected['fullname'] : ''; ?>" id="fullname" required>
      </div>

      <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo isset($selected['phone']) ? $selected['phone'] : ''; ?>" id="phone" required>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo isset($selected['email']) ? $selected['email'] : ''; ?>" id="email" required>
      </div>

      <div class="mb-3">
        <label>Service</label>
        <input type="text" name="service" class="form-control" value="<?php echo isset($selected['service']) ? $selected['service'] : ''; ?>" id="service" required>
      </div>

      <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" class="form-control" value="<?php echo isset($selected['date']) ? $selected['date'] : ''; ?>" id="date" required>
      </div>

      <div class="mb-3">
        <label>Time</label>
        <input type="time" name="time" class="form-control" value="<?php echo isset($selected['time']) ? $selected['time'] : ''; ?>" id="time" required>
      </div>

      <div class="d-grid">
        <button type="submit" name="Update" class="btn btn-primary">Save Changes</button>
      </div>
    </form>
  </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
