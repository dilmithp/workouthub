<?php
if (isset($_POST['submit'])) {
  require_once'conn.php';
  require_once'function.php';
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  login($conn, $email, $pwd);
} else {
  header('Location:login.php');
  exit();
}