<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/bd.custom.inc.php";
include_once "$racine/model/bd.transactionhistory.inc.php";



$titre = "Panel | TikTok";


$allTransactionsIDs = getAllTransactionsIDs();
rsort($allTransactionsIDs);

include "$racine/view/navbar.php";
include "$racine/view/viewPanel.php";
include "$racine/view/footer.php";



?>