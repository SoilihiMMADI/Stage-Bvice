<?php

switch ($_REQUEST['action']) {
    case ACTUALITE:
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        require_once './Include/entete.inc.php';
        $listeArticle = getArticles();
        require_once './Vues/V_Actualite.php';
        require_once './Vues/V_BoutonNewArticle.php';
        require_once './Include/pied.inc.php';
        break;
    case CREA_ARTICLE:
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        require_once './Include/entete.inc.php';
        require_once './Vues/V_NewArticle.php';
        require_once './Include/pied.inc.php';
        break;
    case AJT_ARTICLE:
        $ajouterArticle = setNewArticle($_POST['txtTitre'], $_POST['txtContenu'], $_SESSION['utiId']);
        require_once './Vues/V_AjoutArticle.php';
        break;
    case SUPP_ARTICLE:
        $supprimerArticle = deleteArticle($_POST['idArticle']);
        require_once './Vues/V_SuppArticle.php';
        break;
    default:
        $sessionOuverte = estSessionUtilisateurOuverte();
        $sessionAdmin = estSessionAdminModo();
        require_once './Include/entete.inc.php';
        $listeArticle = getArticles();
        $sessionAdmin = estSessionAdminModo();
        require_once './Vues/V_Actualite.php';
        require_once './Vues/V_BoutonNewArticle.php';
        require_once './Include/pied.inc.php';
}


