<?php

function SGBDConnect() {
    try {

        $connexion = new PDO('mysql:host=localhost;dbname=bvice', 'root', '');
        $connexion->query('SET NAMES UTF8');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
    return $connexion;
}

function existeCompteVisiteur($pseudo) {
    $connexion = SGBDConnect();

    $requete = 'SELECT id_utilisateurs, id_groupes, pass'
            . ' FROM utilisateurs'
            . ' WHERE pseudo = "' . $pseudo . '"';


    $resultat = $connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_ASSOC);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

    return $ligne;
}

function getInfosUtilisateur($pseudo) {
    $connexion = SGBDConnect();

    $requete = 'SELECT id_utilisateurs, id_groupes, pseudo, concat(nom, " ",prenom) as nomPrenom'
            . ' FROM utilisateurs '
            . ' WHERE pseudo = "' . $pseudo . '"';

    $resultat = $connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_ASSOC);
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    return $ligne;
}

function getArticles() {
    $connexion = SGBDConnect();

    $requete = 'SELECT id_articles, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation, concat(nom, " ",prenom) as auteur'
            . ' FROM articles INNER JOIN utilisateurs'
            . ' ON id_auteurs = id_utilisateurs'
            . ' ORDER BY date_creation';

    $resultat = $connexion->query($requete);
    $resultat->setFetchMode(PDO::FETCH_NUM);
    //$ligne = $resultat->fetch(PDO::FETCH_NUM);
    return $resultat;
}

function setNewArticle($titre, $contenu, $idUtilisateur) {
    try{
    $connexion = SGBDConnect();

    $requete = 'INSERT INTO articles (id_articles, titre, contenu, date_creation, id_auteurs) VALUES (NULL, \'' . $titre . '\', \'' . $contenu . '\', CURRENT_TIMESTAMP, ' . $idUtilisateur . ')';
    $resultat = $connexion->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
return $resultat;
}

function deleteArticle($idArticle){
    
try{
    $connexion = SGBDConnect();

    $requete = 'DELETE FROM articles WHERE articles.id_articles = ' . $idArticle . '';
    $resultat = $connexion->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
return $resultat;
}

function setNewCompte($pseudo, $mdp, $nom, $prenom){
    try{
    $connexion = SGBDConnect();

    $requete = 'INSERT INTO utilisateur (id_groupes, pseudo, pass, nom, prenom) VALUES ( 2,\'' . $pseudo . '\',\'' .$mdp. '\',\'' .$nom. '\',\'' .$prenom. '\')';
    $resultat = $connexion->query($requete);
    } catch (PDOException $e) {
        echo 'Erreur !: ' . $e->getMessage() . '<br />';
        exit();
    }
return $resultat;
}