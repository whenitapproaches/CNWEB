<div class="form">
  <form action="<?php echo $base_url . 'logic/login.php'; ?>" method="POST">
    <div class="form-group">
      <label for="username">Username</label>
      <input name="username" type="text" class="">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input name="password" type="password" class="">
    </div>
    <button class="button is-primary" type="submit">Submit</button>
  </form>
</div>