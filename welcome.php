<?php
session_start();

if (isset($_SESSION['user'])) {
 echo "Welcome," .$_SESSION['user'];
 echo "You have successfully logged in";
} else {
header ('Location: login.php');
}
?>

<?php include_once 'footer.inc'?>