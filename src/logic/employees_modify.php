<?php 
  require "../connect_db.php";
  ?>

<?php 
  $base_url = "http://localhost/CNWEB/src/";
  $id = $_POST["id"];
  $room_id = $_POST["room_id"];
  $address = $_POST["address"];
  $name = $_POST["name"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql= "UPDATE employees SET `room_id` = '$room_id', `address` = '$address', `name`='$name' WHERE id='$id'";
  mysqli_query($link, $sql);
  $employees_tables_url = $base_url . 'employees.php';
  header("Location:$employees_tables_url");
?>

<?php
  mysqli_free_result($result);
  return
?>