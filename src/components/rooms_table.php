<?php
    $sql='select * from room';
    $result=mysqli_query($link,$sql);
?>


<div class="employees-table">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th colspan="5" align='left'>Name</th>
        <th align='right'>Description</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
        while($row=mysqli_fetch_array($result)){
          $id=$row{'id'};
          $name=$row{'name'};
          $description=$row{'description'};
          $room_url = $base_url . "room.php" . "?roomID=$id";
          echo "<tr><td align='center'>$id</td><td colspan='5'>$name</td><td align='right'>$description=$</td><td><a href=$room_url>Xem</a></td></tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<?php
  mysqli_free_result($result);
?>