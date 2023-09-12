<?php
require_once "../model/database.php";
if(isset($_POST['submit'])){
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $ville = htmlspecialchars($_POST['ville']);
    $type = htmlspecialchars($_POST['type']);
    // sur $prix ca fonctione pas avec le htmlspecialchars en lign mais ca fonction en local
    $prix = htmlspecialchars($_POST['prix']);
    $db = dbConnexion();
    $request = $db->prepare("INSERT INTO advert (title, description, postal_code, city, type, price) VALUES (?, ?, ?, ?, ?, ?)");
    try{
            $request->execute(array($titre, $description, $code_postal, $ville, $type, $prix));
            header("Location: http://localhost/evaluations_wf3/3_Evaluation_alexis_simoes/accueil.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
}
