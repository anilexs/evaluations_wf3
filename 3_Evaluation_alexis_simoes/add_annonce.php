<?php require_once "inc/header.php"; ?>

<form action="model/db_add_annonce.php" method="post" class="add_annonce">
    <div>
        <label class="annonceAdd">Titre de l’annonce :</label> <br>
        <input type="text" value="" name="titre" class="annonceAdd">
    </div>
    <div>
        <label for="" class="annonceAdd">Description de l’annonce :</label> <br>
        <input type="text" value="" name="description" class="annonceAdd">
    </div>
    <div>
        <label for="" class="annonceAdd">Code postal :</label> <br>
        <input type="text" value="" name="code_postal" class="annonceAdd">
    </div>
    <div>
        <label for="" class="annonceAdd">ville du bien immobilier :</label> <br>
        <input type="text" value="" name="ville" class="annonceAdd">
    </div>
    <div>
        <label class="annonceAdd">Type d’annonce :</label> <br>
        <label class="annonceAdd">vente</label>
        <input class="annonceAdd" type="radio" value="vente" name="type">
        <label class="annonceAdd">location</label>
        <input class="annonceAdd" type="radio" value="location" name="type">
    </div>
    <div>
        <label for="" class="annonceAdd">Prix :</label> <br>
        <input type="number" value="" name="prix" class="annonceAdd">
    </div>
    <input type="submit" value="Ajouter une annonce" name="submit" class="annonceAdd">
</form>

<?php require_once "inc/footer.php"; ?>