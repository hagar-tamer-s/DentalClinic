<?php

include "db_connection.php";

$select_run = "SELECT * FROM messages";
$selected = mysqli_query($connected ,$select_run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer messages - Table</title>
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
      bottom: 20px;
      right: 20px;
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

<a href="index.php">
  <button class="btn btn-primary fixed-back-button">Go to Home</button>
</a>

<div class="container">
  <h2 class="text-center my-4">Customer messages</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody id="data-table-body">
    <?php foreach($selected as $data){ ?>
    <tr>
      <th scope="row">   <?php echo $data['email']  ?>  </th>
      <td> <?php echo $data['name']  ?>  </td>
      <td> <?php echo $data['subject']  ?>  </td>
      <td> <?php echo $data['message']  ?>  </td>

    </tr>
  <?php } ?>
    </tbody>
  </table>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
