<?php
include "server.php";
include __DIR__ . '/../../partials/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h1>Numero prenotazione: <?php echo $prenotazione['id'] ?> </h1>
                <ul>
                    <li>Numero Stanza: <?php echo $prenotazione['room_number'] ?></li>
                    <li>Nome Ospite: <?php echo $prenotazione['name'] . ' ' . $prenotazione['lastname'] ?></li>
                    <li>Creato il: <?php echo $prenotazione['created_at'] ?></li>
                    <li>Aggiornato il: <?php echo $prenotazione['updated_at'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../../partials/footer.php'; ?>