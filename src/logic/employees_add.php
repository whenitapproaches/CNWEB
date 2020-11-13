<?php 
  require "../connect_db.php";
  ?>

<?php 
  $base_url = "http://localhost/CNWEB/src/";
  $room_id = $_POST["room_id"];
  $address = $_POST["address"];
  $name = $_POST["name"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql= "INSERT INTO employees (name, address, room_id) VALUES ('$name', '$address', '$room_id')";
  mysqli_query($link, $sql);
  $employees_tables_url = $base_url . 'employees.php';
  header("Location:$employees_tables_url");
?>