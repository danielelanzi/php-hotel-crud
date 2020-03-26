<?php
  include __DIR__ . '/../database.php';
  include __DIR__ . '/../partials/header.php';

  if (!empty($_GET['id'])) {
    $roomId= $_GET['id'];
  }

  $sql = "SELECT FROM `stanze` WHERE `id` = $roomId";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
  } else {
    die('NO ID');
  }
 ?>

 <div class="container">
   <div class="row">
     <div class="col-12">
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="room_number">Numero Stanza</label>
           <input class="form-control" type="text" name="room_number" value="<?php echo $room['room_number'];  ?>">
         </div>
       </form>
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="floor">Numero Stanza</label>
           <input class="form-control" type="text" name="floor" value="<?php echo $room['floor'];  ?>">
         </div>
       </form>
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="beds">Numero Stanza</label>
           <input class="form-control" type="text" name="beds" value="<?php echo $room['beds'];  ?>">
         </div>
       </form>
       <div class="form-grup">
         <input type="hidden" name="id" value="<?php echo $room['id'];  ?>">
         <input class="form-control" class="btn btn-submit" type="submit" name="" value="Salva">
       </div>
     </div>
   </div>
 </div>

 <?php
   include __DIR__ . '/../partials/footer.php';
  ?>
