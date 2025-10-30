<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header("Location: login.php");
  exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Regular expression validation
  if (preg_match('/^[A-Za-z0-9_]{3,20}$/', $username) && preg_match('/^[A-Za-z0-9!@#$%^&*]{5,}$/', $password)) {
    // Check if user exists in the session (from registration)
    if (isset($_SESSION['registered_user'])) {
      $registered = $_SESSION['registered_user'];

      if ($username === $registered['username'] && $password === $registered['password']) {
        $_SESSION['username'] = $username; // login successful
        header("Location: index.php");
        exit();
      } else {
        $error = "Incorrect username or password.";
      }
    } else {
      $error = "No registered user found. Please register first.";
    }
  } else {
    $error = "Invalid input format.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Portfolio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="style.css">
</head>

<body class="auth-page">
  <div class="overlay"></div>
  <div class="auth-container">
    <h3>Login</h3>

    <?php if ($error): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>

      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
      </div>

      <button type="submit" class="btn btn-custom w-100">Login</button>
      <p class="text-center mt-3">No account? <a href="register.php">Register here</a></p>
    </form>
  </div>
</body>
</html>
