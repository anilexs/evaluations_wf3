<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/evaluations_wf3/3_Evaluation_alexis_simoes/model/database.php";

function listAnnonce($i){
    $db = dbConnexion();
    if($i == 1){
        $request = $db->prepare("SELECT * FROM advert ORDER BY id DESC limit 15");
    }else{
        $request2 = $db->prepare("SELECT * FROM advert ORDER BY id DESC");
    }
    $annonce = null;
    try{
            if ($i == 1) {
            $request->execute();
            $annonce = $request->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $request2->execute();
            $annonce = $request2->fetchAll(PDO::FETCH_ASSOC);
        }
        }catch(PDOException $e){
            $e->getMessage();
        }

    return $annonce;
}

function viuwAll($idUser){
    $db = dbConnexion();
    $request = $db->prepare("SELECT * FROM advert WHERE id = ?");
    $viuwAll = null;
    try{
        $request->execute([$idUser]);
        $viuwAll = $request->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        $e->getMessage();
    }

    return $viuwAll;
}


?>
