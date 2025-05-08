<?php

include "db_connection.php";

$select_run = "SELECT * FROM patients";
$selected = mysqli_query($connected ,$select_run);

if(isset($_GET['delete'])){

  $patient_id = $_GET['delete'];
  $patient_delete = "DELETE FROM patients WHERE patient_id  =  $patient_id ";
  $deleted = mysqli_query($connected , $patient_delete );
  if( $deleted){
      echo "<h1 class='text-info text-center'> The Appointment is deleted  </h1>";
  }else{
      echo "<h1 class='text-info text-center'> Error with deleting the appointment </h1>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Data - Table</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-bottom: 50px;
    }
    .table-container {
      margin-top: 30px;
    }
    .fixed-back-button {
      position: fixed;
      z-index: 999;
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .fixed-back-button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<a href="login.php">
  <button style="bottom: 20px; right: 20px;" class="btn btn-primary fixed-back-button">Back to login</button>
</a>

<a href="index.php">
  <button style="bottom: 20px; left: 20px;" class="btn btn-primary fixed-back-button">Go to home</button>
</a>

<div class="container">
  <h2 class="text-center my-4">Customer Data and Bookings</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="data-table-body">
    <?php foreach($selected as $data){ ?>
    <tr>
      <th scope="row">   <?php echo $data['patient_id']  ?>  </th>
      <td> <?php echo $data['fullname']  ?>  </td>
      <td> <?php echo $data['phone']  ?>  </td>
      <td> <?php echo $data['email']  ?>  </td>
      <td> <?php echo $data['service']  ?>  </td>
      <td> <?php echo $data['date']  ?>  </td>
      <td> <?php echo $data['time']  ?>  </td>

      <td>
        <a class="btn btn-success" href="/dentalclinic/table.php?delete=<?php echo $data['patient_id']  ?>"> DELETE</a>
        <a class="btn btn-danger" href="/dentalclinic/update.php?update=<?php echo $data['patient_id']  ?>"> UPDATE</a>
    </td>
    </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
