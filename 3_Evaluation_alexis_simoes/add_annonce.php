<?php require_once "inc/header.php"; ?>

<form action="model/db_add_annonce.php" method="post">
    <div>
        <label>Titre de l’annonce</label>
        <input type="text" value="" name="titre">
    </div>
    <div>
        <label for="">Description de l’annonce</label>
        <input type="text" value="" name="description">
    </div>
    <div>
        <label for="">Code postal</label>
        <input type="text" value="" name="code_postal">
    </div>
    <div>
        <label for="">ville du bien immobilier</label>
        <input type="text" value="" name="ville">
    </div>
    <div>
        <label>Type d’annonce</label>
        <input type="radio" value="location" name="type">
        <input type="radio" value="vente" name="type">
    </div>
    <div>
        <label for="">Prix</label>
        <input type="number" value="" name="prix">
    </div>
    <input type="submit" value="Ajouter une annonce" name="submit">
</form>

<?php require_once "inc/footer.php"; ?>