<?php
require_once "../model/database.php";

if(isset($_POST['submit'])){
    $reservation = htmlspecialchars($_POST['reservation_message']);
    $id = htmlspecialchars($_POST['id']);
    
    $db = dbConnexion();

    $request = $db->prepare("UPDATE advert SET reservation_message = ? WHERE id = ?");

    try{
        $request->execute(array($reservation, $id));
        header("Location: http://localhost/evaluations_wf3/3_Evaluation_alexis_simoes/accueil.php");
    } catch(PDOException $e){
        echo $e->getMessage();
    }
}
