<h1>Add an employee</h1>

<form action="<?php echo $base_url . 'logic/employees_add.php'; ?>" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address" type="text" class="">
  </div>
  <div class="form-group">
    <label for="room_id">Room ID</label>
    <input name="room_id" type="text" class="">
  </div>
  <button type="submit">Submit</button>
</form>