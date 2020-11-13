<?php 
  $base_url = "http://localhost/CNWEB/src/";
  
  $unauthorizedURL = $base_url . 'login.php';

  if(!isset($_COOKIE['token'])) {header("Location:$unauthorizedURL"); exit(); }

  $token = $_COOKIE['token'];

  $sql = "SELECT * FROM users WHERE token='$token'";
  $users = mysqli_query($link, $sql);

  $row = mysqli_fetch_array($users);

  if(count($row) === 0) {header("Location:$unauthorizedURL"); exit();};

?>