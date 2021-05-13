<?php
   
   $username="root";
   $password="";
   $server='localhost';
   $db='sitedata';

$con= mysqli_connect($server, $username,$password,$db);

if($con){
    
}else{
  // echo"no connection";
  
   die("no connection".mysqli_connect_error());
}


?>