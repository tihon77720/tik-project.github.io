<?php

include_once "$racine/model/bd.transactionhistory.inc.php";


    if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
        $racine="..";
    }




    if (isset($_POST["user"]) && isset($_POST["coins"]) && isset($_POST["price"]) && isset($_POST["payment"]) ) {
        $user = $_POST["user"];
        $price = $_POST["price"];
        $coins = $_POST["coins"];
        $payment = $_POST["payment"];

        

        

        $insert = insertTransaction($user, $coins, $price, $payment, "Pending");

        // header('Location: ./?action=defaut&status=PaiementAccepted&nBcoin='.$coins);
        header('Location: ./?action=defaut&status=Processing');
        
    }else {
        echo "error";
    }

    
?>