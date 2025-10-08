<!DOCTYPE html >

<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password123') {
  $_SESSION['user'] = $username;
  header ('Location: welcome.php');
  $token = $_POST['token'] ?? '';
  echo "User token is: " . htmlspecialchars($token);
} else {
echo "Invalid login. <a href='login.php'>Try again</a>";
}
?>