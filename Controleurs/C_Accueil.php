<?php

$sessionOuverte = estSessionUtilisateurOuverte();
$sessionAdmin = estSessionAdminModo();
require_once './Include/entete.inc.php';
require_once './Vues/V_Accueil.php';
require_once './Include/pied.inc.php';