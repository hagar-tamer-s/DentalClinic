<?php

session_start();
include "db_connection.php";

if (isset($_POST['send'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connected->prepare("SELECT admin_id, password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($admin_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['admin_id'] = $admin_id;

                header("Location: table.php");
                exit();
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "Username not found.";
        }
    } else {
        $error = "Something went wrong: " . $stmt->error;
    }

    $stmt->close();
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
  <div class="login-box">
    <h2 class="text-center">Admin Login</h2>

    <?php if (!empty($error)): ?>
          <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php endif; ?>

    <form id="loginForm" method="post">
      <div class="mb-3">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" required>
      </div>

      <div class="mb-3">
        <label for="password">Password</label>
        <div class="input-group">
          <input type="password" name="password" class="form-control" id="password" required>
          <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">Show</button>
        </div>
      </div>

      <div class="mb-3 text-end">
        <a href="forget_pass.php">Forgot Password?</a>
      </div>

      <div class="d-grid">
       <button type="submit" name="send" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
</div>

<script src="./js/bootstrap.bundle.min.js"></script>
<script>
  function togglePassword() {
    const passField = document.getElementById('password');
    passField.type = passField.type === 'password' ? 'text' : 'password';
  }
</script>

</body>
</html>
