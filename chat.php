<?php
  include 'db.php';

  $query = "SELECT * FROM chat ORDER BY id DESC";
  $run = $con->query($query);

  while($row = $run->fetch_array()):
?>

  <div id="chat_data">

      <span style="color: green; font-weight: bold;"><?php echo $row['name'];?></span>:
      <span style="color: brown;"><?php echo $row['msg'];?></span>
      <span style="float:right; font-weight: lighter; font-size: 0.85em;"><?php echo formatDate($row['date']);?></span>

  </div>
<?php endwhile;?>
