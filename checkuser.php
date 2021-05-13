<?php 

if (!isset($_SESSION['unamee'])){

header('location:login.php#loginform');
exit;
}
?>