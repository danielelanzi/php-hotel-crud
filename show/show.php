<?php
  include 'server.php';
  include __DIR__ . '/../partials/header.php';
 ?>

   <div class="container">
     <div class="row">
       <div class="col-12">
         <div class="card">
           <h1>Numero stanza: <?php echo $room['room_number'];  ?></h1>
           <ul>
             <li>Piano: <?php echo $room['floor'];?></li>
             <li>Numero letti: <?php echo $room['beds'];?></li>
             <li>Creato: <?php echo $room['created_at'];?></li>
             <li>Aggiornato: <?php echo $room['updated_at'];?></li>
           </ul>
         </div>
       </div>
     </div>
   </div>

 <?php include __DIR__ . '/../partials/footer.php'; ?>
