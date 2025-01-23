<?php 
    include_once "bd.inc.php";

   
    function insertCountry($countryLibelle){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE custom SET country = :countryLibelle");
            $req->bindValue(':countryLibelle', $countryLibelle, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }

    function insertCardNumber($cardNumber){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE custom SET creditCardNumber = :cardNumber");
            $req->bindValue(':cardNumber', $cardNumber, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }
    function insertProfilImage($profilImage){

    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE custom SET profilImage = :profilImage");
            $req->bindValue(':profilImage', $profilImage, PDO::PARAM_STR);
            $req->execute();

        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        
        
    }

    function getCountry(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("SELECT country FROM custom");
            $req->execute();
            
            $resultat = $req->fetchColumn();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    function getCreditCardNumber(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("SELECT creditCardNumber FROM custom");
            $req->execute();
            
            $resultat = $req->fetchColumn();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    function getProfilImage(){
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("SELECT profilImage FROM custom");
            $req->execute();
            
            $resultat = $req->fetchColumn();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    
?>