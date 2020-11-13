<?php 
  require "../connect_db.php";
  ?>

<?php 
  $base_url = "http://localhost/CNWEB/src/";
  $description = $_POST["description"];
  $name = $_POST["name"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql= "INSERT INTO room (name, description) VALUES ('$name', '$description')";
  mysqli_query($link, $sql);
  $rooms_tables_url = $base_url . 'rooms.php';
  header("Location:$rooms_tables_url");
?>