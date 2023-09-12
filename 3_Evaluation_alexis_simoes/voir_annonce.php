<?php 
require_once "inc/header.php"; 
require_once "inc/function.php";
$id = $_GET['id'];
$viuwAll = viuwAll($id);
$annonce = $viuwAll[0];
?>
<style>
    .annonce{
        text-align: center;
    }
</style>

<div class="annonce">
    <p class="title"><?= $annonce['title']; ?></p>
    <p><?= $annonce['description']; ?></p>
    <p><?= $annonce['postal_code']; ?></p>
    <p><?= $annonce['city']; ?></p>
    <p><?= $annonce['type']; ?></p>
    <p><?= $annonce['price']; ?>€</p>
    <p><?= $annonce['reservation_message']; ?></p>
    <form action="model/reservation_message.php" method="post">
        <input type="text" name="id"; value="<?= $id ?>" hidden>
        <textarea name="reservation_message" id="" cols="30" rows="10"></textarea>
        <button type="submit" name="submit">Je réserv</button>
    </form>
</div>


<?php require_once "inc/footer.php"; ?>