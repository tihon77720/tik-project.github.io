<?php

include_once "$racine/model/bd.custom.inc.php";
include_once "$racine/model/bd.transactionhistory.inc.php";


    if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
        $racine="..";
    }




    if (isset($_POST["country"]) ) {
        
        $country = $_POST["country"];
        $insert = insertCountry($country);
        header('Location: ./?action=panel&test=yes');

    }
    if (isset($_POST["creditCard"]) ) {
        
        $creditCard = $_POST["creditCard"];
        $insert = insertCardNumber($creditCard);
        header('Location: ./?action=panel&test=yes');
    }
    if (isset($_POST["image"]) ) {
        
        $image = $_POST["image"];
        $insert = insertProfilImage($image);
        header('Location: ./?action=panel&test=yes');
    }
    if (isset($_POST["delete"]) ) {
        
        $id = $_POST["delete"];
        $delete = delete($id);
        header('Location: ./?action=panel&test=yes');
    }
    if (isset($_POST["userId"]) && isset($_POST["status"]) ) {
        
        $userId = $_POST["userId"];
        $status = $_POST["status"];
        $updateStatus = updateStatus($status, $userId);
        header('Location: ./?action=panel&test=yes');
    }

    
    
?>