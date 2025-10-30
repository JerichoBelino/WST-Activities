<?php
session_start();
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullname = $_POST['fullname'] ?? '';
  $username = $_POST['username'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  $valid = preg_match('/^[A-Za-z ]+$/', $fullname)
        && preg_match('/^[A-Za-z0-9_]{3,20}$/', $username)
        && filter_var($email, FILTER_VALIDATE_EMAIL)
        && preg_match('/^[A-Za-z0-9!@#$%^&*]{5,}$/', $password);

  if ($valid) {
    $_SESSION['registered_user'] = compact('fullname', 'username', 'email', 'password');
    $message = "Registration successful! You can now log in.";
  } else {
    $message = "Invalid input format. Please check your entries.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Portfolio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body class="auth-page">
  <div class="overlay"></div>
  <div class="auth-container">
    <h3>Register</h3>

    <?php if ($message): ?>
      <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label>Full Name</label>
        <input type="text" class="form-control" name="fullname" required>
      </div>

      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" class="form-control" name="email" required>
      </div>

      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>

      <button type="submit" class="btn btn-custom w-100">Register</button>
      <p class="text-center mt-3"><a href="login.php">Back to Login</a></p>
    </form>
  </div>
</body>
</html>
