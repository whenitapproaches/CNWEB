<?php
  $sql='select * from employees';
  $result=mysqli_query($link,$sql);
?>

<a class="button is-danger" href="<?php echo $base_url . 'logic/employees_delete_all.php'; ?>">Xoa tat ca</a>

<div class="employees-search-form">
  <form action="<?php echo $base_url . 'logic/employees_search.php'; ?>" method="GET">
    <div class="form-group">
      <label>Tim kiem:</label>
      <input name="search" type="text" placeholder="Nhap id nguoi dung hoac ho va ten...">
    </div>
    <button class="button is-primary" type="submit">Tim</button>
  </form>
</div>

<div class="employees-table">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th colspan="5" align='left'>Name</th>
        <th align='right'>Address</th>
        <th>Room ID</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row=mysqli_fetch_array($result)){
          $id=$row{'id'};
          $name=$row{'name'};
          $room_id=$row{'room_id'};
          $address=$row{'address'};
          $edit_url = $base_url . "employees_modify.php?id=$id&name=$name&address=$address&room_id=$room_id";
          $remove_url = $base_url . "logic/employees_delete.php?id=$id";
          echo "<tr><td align='center'>$id</td><td colspan='5'>$name</td><td align='right'>$address</td><td align='center'>$room_id</td><td><a href='$edit_url'>Modify</a></td><td><a href='$remove_url'>Remove</a></td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<?php
  mysqli_free_result($result);
?>