<?php 
    include_once "bd.inc.php";

    function insertTransaction($user, $coins, $price, $paiementMethod, $status){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("INSERT INTO transactionhistory(user,coins, price, paiementMethod, status) VALUES(:user,:coins,:price,:paiementMethod,:status)");
            $req->bindValue(':user', $user, PDO::PARAM_STR);
            $req->bindValue(':coins', $coins, PDO::PARAM_STR);
            $req->bindValue(':price', $price, PDO::PARAM_STR);
            $req->bindValue(':paiementMethod', $paiementMethod, PDO::PARAM_STR);
            $req->bindValue(':status', $status, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }

    
    function getTransactions() {
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from transactionhistory");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    function checkStatus(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select status from transactionhistory");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        return $resultat;
    }

    function getAllTransactionsIDs(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select id, user, status from transactionhistory");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        return $resultat;
    }
    function getLastNbCoins(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select coins from transactionhistory");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        return $resultat;
    }

    function delete($id){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("DELETE FROM transactionhistory WHERE id = :id");
            $req->bindValue(':id', $id, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }

    function updateStatus($status, $id){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE transactionhistory SET status = :status WHERE id = :id ");
            $req->bindValue(':status', $status, PDO::PARAM_STR);
            $req->bindValue(':id', $id, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }

   
?>