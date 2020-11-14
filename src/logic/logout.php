<?php 
  $base_url = "http://localhost/CNWEB/src/";
?>
<?php 

  setcookie("token", "", [
    "path" => "/"
  ]);
  setcookie("username", "", [
    "path" => "/"
  ]);

  header("Location:$base_url");
?>