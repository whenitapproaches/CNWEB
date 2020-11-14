
<div class="form">
<h1>Add a room</h1>

<form action="<?php echo $base_url . 'logic/rooms_add.php'; ?>" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input name="description" type="text" class="">
  </div>
  <button class="button is-primary" type="submit">Submit</button>
</form>
</div>