<?php 
  require "../connect_db.php";
?>
<?php 
  $base_url = "http://localhost/CNWEB/src/";
  $id = $_GET["id"];
?>

<?php require "../middleware/auth.php"; ?>

<?php 
  $sql = "DELETE FROM employees WHERE id=$id";
  mysqli_query($link, $sql);
  $employees_tables_url = $base_url . 'employees.php';
  header("Location:$employees_tables_url");
?>

<?php
  mysqli_free_result($result);
  exit();
?>