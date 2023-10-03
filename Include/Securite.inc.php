<?php

require_once './Modeles/SourceDonnees.inc.php';

session_start();

function valideInfosCompteUtilisateur($pseudo, $mdp) {

    $bonPseudo = existeCompteVisiteur($pseudo);
    if ($bonPseudo) {
        $bonPass = password_verify($mdp, $bonPseudo['pass']);
        if ($bonPass) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function ouvreSessionUtilisateur($pseudo) {
    $_SESSION['utilPseudo'] = $pseudo;

    $infos = getInfosUtilisateur($pseudo);

    $_SESSION['utiMembre'] = $infos['id_groupes'];
    $_SESSION['utiPseudo'] = $infos['pseudo'];
    $_SESSION['utiNomPrenom'] = $infos['nomPrenom'];
    $_SESSION['utiId'] = $infos['id_utilisateurs'];
}

function estSessionUtilisateurOuverte() {
    return isset($_SESSION['utilPseudo']);
}

function estSessionAdminModo() {
    if (estSessionUtilisateurOuverte()) {
        if ($_SESSION['utiMembre'] == 1) {
            return true;
        }
    } else {
        return false;
    }
}

function fermeSessionUtilisateur() {
    session_destroy();
}

if(estSessionUtilisateurOuverte()){ // si le membre est connecté
     if(isset($_SESSION['timestamp'])){ // si $_SESSION['timestamp'] existe
             if($_SESSION['timestamp'] + 900 > time()){
                    $_SESSION['timestamp'] = time();
             }else{ 
                 session_unset();
                 session_destroy();
             echo "<script language='JavaScript'>alert('Vous avez été déconnecté pour inactivité trop longue!')</script>";
             }
     }else{ $_SESSION['timestamp'] = time(); }
}