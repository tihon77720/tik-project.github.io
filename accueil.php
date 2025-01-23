<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/model/bd.custom.inc.php";
include_once "$racine/model/bd.transactionhistory.inc.php";

$lastNbCoins = getLastNbCoins();

$NbCoins = end($lastNbCoins);






$titre = "TikTok Coins: Buy and recharge Coins to send Gifts | TikTok";
include "$racine/view/navbar.php";
include "$racine/view/viewCoinRecharge.php";
include "$racine/view/footer.php";



?>