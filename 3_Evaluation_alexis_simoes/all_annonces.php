<?php 
require_once "inc/header.php"; 
require_once "inc/function.php";
$listAnnonce = listAnnonce(0);
$reserv = null;
?>

<div class="contenaire">
    <?php
    $count = 0;
    foreach ($listAnnonce as $annonce) {
            if(isset($annonce['reservation_message'])){
                $reserv = "reserv";
            }else{
                $reserv = "libre";
            } ?>
            <div class="card <?= $reserv ?>">
                <p><?= $annonce['title'] ?></p>
                <p><?= $annonce['description'] ?></p>
                <p><?= $annonce['postal_code'] ?></p>
                <p><?= $annonce['city'] ?></p>
                <p><?= $annonce['type'] ?></p>
                <p><?= $annonce['price'] ?>€</p>
                <?php if(isset($annonce['reservation_message'])){ ?>
                    <input type="text" value="réservé" disabled>
                <?php }else{ ?>
                        <a class="a" href="voir_annonce.php?id=<?= $annonce['id']; ?>">Consulter une annonce</a>
                <?php } ?>
            </div>
            <?php } ?>
</div>

<?php require_once "inc/footer.php"; ?>