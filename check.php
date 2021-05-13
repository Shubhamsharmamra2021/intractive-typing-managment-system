<?php 

if (!isset($_SESSION['uname'])){

header('location:adminpanel.php');
exit;
}
?>