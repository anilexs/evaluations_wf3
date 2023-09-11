<?php 
require_once "inc/header.php"; 
require_once "inc/function.php";
$listAnnonce = listAnnonce(1);
?>

    <div class="contenaire">
    <?php
    foreach ($listAnnonce as $annonce) {?>
            <div class="card">
                <p class="title"><?= $annonce['title'] ?></p>
                <p><?= $annonce['description'] ?></p>
                <p><?= $annonce['postal_code'] ?></p>
                <p><?= $annonce['city'] ?></p>
                <p><?= $annonce['type'] ?></p>
                <p><?= $annonce['price'] ?></p>
            </div>
        <?php
    }
?>


    </div>

<?php require_once "inc/footer.php"; ?>