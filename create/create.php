<?php
  include __DIR__ . '/../partials/header.php';
 ?>

 <div class="container">
   <div class="row">
     <div class="col-12">
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="room_number">Numero Stanza</label>
           <input class="form-control" type="text" name="room_number" placholder="Inserisci il numero della stanza">
         </div>
       </form>
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="floor">Numero Stanza</label>
           <input class="form-control" type="text" name="floor" placholder="Inserisci il numero del piano">
         </div>
       </form>
       <form action="server.php" method="POST">
         <div class="form-group">
           <label for="beds">Numero Stanza</label>
           <input class="form-control" type="text" name="beds" placholder="Inserisci il numero dei letti">
         </div>
       </form>
       <div class="form-grup">
         <!-- <input type="hidden" name="id"> -->
         <input class="form-control" class="btn btn-submit" type="submit" name="" value="Salva">
       </div>
     </div>
   </div>
 </div>

 <?php
   include __DIR__ . '/../partials/footer.php';
  ?>
