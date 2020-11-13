<?php 
  $base_url = "http://localhost/CNWEB/src/";
  $username = $_POST["username"];
  $password = md5($_POST["password"]);
?>

<?php 
  require "../connect_db.php";


?>

<?php 
  $sql= "SELECT * FROM users WHERE username='$username' and password='$password'";
  $result = mysqli_query($link, $sql);

  $row = mysqli_fetch_array($result);

  $loginURL = $base_url . 'login.php';

  if(count($row) === 0) header("Location:$loginURL");

  $token = sha1(mt_rand(1, 90000) . 'CNWEB');

  setcookie('token', $token, time()+60*60*24*30, '/');

  $sql= "UPDATE users SET token='$token' WHERE username='$username'";
  $result = mysqli_query($link, $sql);
  
  header("Location:$base_url");
  mysql_free_result($result);
?>