<?php
require_once './Include/Constantes.inc.php';
require_once './Modeles/SourceDonnees.inc.php';
require_once './Include/Securite.inc.php';

if (!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 5;
    require_once './Controleurs/C_Accueil.php';
}
else{
    switch ($_REQUEST['action']) {
        case PAGE_IDENTIF:
            require_once './Controleurs/C_Identification.php';
            break;
        case TEST_IDENTIF:
            require_once './Controleurs/C_Identification.php';
            break;
        case DECONNEXION:
            require_once './Controleurs/C_Identification.php';
            break;
        case ACCUEIL:
            require_once './Controleurs/C_Accueil.php';
            break;
        case HISTOIRE:
            require_once './Controleurs/C_APropos.php';
            break;
        case ACTIVITES:
            require_once './Controleurs/C_Activites.php';
            break;
        case ACTUALITE:
            require_once './Controleurs/C_Actualite.php';
            break;
        case CREA_ARTICLE:
            require_once './Controleurs/C_Actualite.php';
            break;
        case AJT_ARTICLE:
            require_once './Controleurs/C_Actualite.php';
            break;
        case SUPP_ARTICLE:
            require_once './Controleurs/C_Actualite.php';
            break;
        /*case MUSIQUES:
            require_once './Controleurs/C_Musiques.php';
            break;*/
        case CONTACT:
            require_once './Controleurs/C_Contact.php';
            break; 
        /*case FORM_EMAIL:
            require_once './Controleurs/C_Contact.php';
            break; */
        /*case GERER:
            require_once './Controleurs/C_Gerer.php';
            break;*/
        default:
            echo 'Cette page n\'existe pas';
            break;
    }
}
