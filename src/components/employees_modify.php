<?php 
  $id = $_GET["id"];
  $room_id = $_GET["room_id"];
  $address = $_GET["address"];
  $name = $_GET["name"];

?>

<h1>Modify an employee</h1>

<form action="<?php echo $base_url . 'logic/employees_modify.php'; ?>" method="POST">
  <div class="form-group">
    <label for="id">ID</label>
    <input name="id" type="number" value="<?php echo $id; ?>" readonly class="">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" value="<?php echo $name; ?>" class="">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" value="<?php echo $address; ?>" class="">
  </div>
  <div class="form-group">
    <label for="room_id">Room ID</label>
    <input name="room_id" type="text" value="<?php echo $room_id; ?>" class="">
  </div>
  <button type="submit">Submit</button>
</form>