<?php

    if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
        $racine="..";
    }

    include_once "$racine/model/bd.transactionhistory.inc.php";
    include_once "$racine/model/bd.custom.inc.php";

    $transactions = getTransactions();
    $status = checkStatus();
    rsort($transactions);


    $titre = "Transaction History | TikTok Recharge";
    include "$racine/view/navbar.php";
    include "$racine/view/viewTransactionHistory.php";
    include "$racine/view/footer.php";
   
    


?>