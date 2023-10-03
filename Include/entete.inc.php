<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sound Musical School</title>
        <link rel="shortcut icon" href="img/logo-bvice.png">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/bvice.css" rel="stylesheet">

    </head>

    <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Sound Musical School</span>
            <span class="site-heading-lower">B.VICE</span>
        </h1>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">B.vice</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 5 ) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=5">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 10) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=10">À propos</a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 20) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=20">Activités</a>
                        </li>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 30) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=30">Actualité
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!-- page musique à remplir avec contenus plus tard
                        <li class="nav-item <?php
                        /* if ($_REQUEST['action'] == 40) {
                          echo 'active';
                          } */
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=40">Musiques</a>
                        </li>
                        -->
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 50) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=50">Contact</a>
                        </li>
                        <?php
                        /*if ($sessionAdmin) {
                            echo '<li class="nav-item ';
                            if ($_REQUEST['action'] == 60) {
                                echo 'active';
                            }
                            echo 'px-lg-4">';
                            ?>
                            <a class="nav-link text-uppercase text-expanded" href="index.php?action=60">Gérer</a>
                            </li>
                        <?php } */?>
                        <li class="nav-item <?php
                        if ($_REQUEST['action'] == 1) {
                            echo 'active';
                        }
                        ?> px-lg-4">
                            <?php
                            if (!$sessionOuverte) {
                                echo '<a id="connexion" class="nav-link text-uppercase text-expanded" title="seulement pour les membres du bvice pour le moment" data-toggle="tooltip" data-placement="top" href="index.php?action=1">Connexion</a>';
                            } else {
                                echo '<a class="nav-link text-uppercase text-expanded deconnexion" href="index.php?action=3">Déconnexion</a>';
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>