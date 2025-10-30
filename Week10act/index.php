<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php include 'content.php'; ?>
<?php include 'footer.php'; ?>
