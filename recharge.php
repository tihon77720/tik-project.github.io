<?php

    if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
        $racine="..";
    }

    include_once "$racine/model/bd.custom.inc.php";



    if (isset($_POST["user"]) && isset($_POST["PriceSpanValue"]) && isset($_POST["coinsValue"]) ) {
        $user = $_POST["user"];
        $price = $_POST["PriceSpanValue"];
        $coinValue = $_POST["coinsValue"];
        header('Location: ./?action=defaut&user='.$user.'&price='.$price.'&coins='.$coinValue.'&status=success');
    }

    


?>