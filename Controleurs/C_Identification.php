<?php

$actionN = $_REQUEST['action'];
switch ($actionN) {
    case PAGE_IDENTIF:        
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        require_once './Include/entete.inc.php';
        require_once './Vues/V_Identification.php';
        require_once './Include/pied.inc.php';
        break;
    case TEST_IDENTIF:
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        $compteExistant = valideInfosCompteUtilisateur($_POST['txtUti'], ($_POST['pwMDP']));
        $ouvrirSession = ouvreSessionUtilisateur($_POST['txtUti']);
        require_once './Vues/V_Identification.php';
        require_once './Include/pied.inc.php';
        break;
    case DECONNEXION:
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        $deconnexion = fermeSessionUtilisateur();
        require_once './Vues/V_Identification.php';
        break;
    default :
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        require_once './Include/entete.inc.php';
        require_once './Vues/V_Identification.php';
        require_once './Include/pied.inc.php';
}