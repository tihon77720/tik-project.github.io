<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["recharge"] = "recharge.php";
    $lesActions["paiement"] = "paiement.php";
    $lesActions["transaction-history"] = "transactionHistory.php";
    $lesActions["panel"] = "panel.php";
    $lesActions["panelProcessing"] = "panelProcessing.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}

?>