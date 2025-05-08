<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $new_password = $_POST["new_password"];

    $stmt = $connected->prepare("SELECT admin_id FROM admins WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {

        $new_hashed = password_hash($new_password, PASSWORD_DEFAULT);
        $update = $connected->prepare("UPDATE admins SET password = ? WHERE email = ?");
        $update->bind_param("ss", $new_hashed, $email);
        $update->execute();

        echo "<div style='color:green;'>✅ Password updated successfully</div>";
    } else {
        echo "<div style='color:red;'>❌ Email not found</div>";
    }
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Customer Data</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      padding-bottom: 100px;
    }
    .login-box {
      max-width: 500px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
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

<div class="container">
  <div class="login-box">
    <form id="loginForm" method="post">
      <div class="mb-3">
        <label for="email">email</label>
        <input type="email" name="email" class="form-control" id="email" required>
        <label>Enter new password:</label><br>
        <input type="password" name="new_password" class="form-control" required><br><br>
      </div>
      <div class="d-grid">
        <button type="submit" name="send" class="btn btn-primary" >Reset</button>
      </div>
    </form>
  </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
