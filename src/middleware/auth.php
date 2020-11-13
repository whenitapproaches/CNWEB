<?php 
  $base_url = "http://localhost/CNWEB/src/";
  
  $unauthorizedURL = $base_url . 'login.php';

  if(!isset($_COOKIE['token'])) {header("Location:$unauthorizedURL"); exit(); }

  $token = $_COOKIE['token'];

  $sql = "SELECT users WHERE token='$token'";
  $user = mysqli_query($link, $sql);

  if(!$user) {header("Location:$unauthorizedURL"); exit();};

?>