<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <title>Bienvenue sur Elam</title>

    <!-- Bootstrap -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/male-female/flaticon.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/elam-colors.php" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>

<?php require_once "inc/functions.php"; ?>

<header id="elam_header">
    <div id="header_head" class="container">
        <div class="row">
            <div id="header_logo" class="col-sm-4">
                <a href="index.php" title="Retour à l'accueil">
                    <img src="img/elam-logo.png" height="50" alt="logo elam"/>
                </a>
            </div>
            <!--logo fin-->

            <div id="header_buttons_inscription" class="col-sm-6 col-sm-push-2 text-right">
                <ul id="header_buttons" class="list-unstyled list-inline animated">
                    <li class="hidden-xs"><a href="#" class="login-btn btn">Inscription</a></li>
                    <li class="hidden-xs"><a href="#" class="account-btn btn">Mon compte</a></li>
                    <li class="visible-xs-inline-block"><a href="#" class="login-btn-alt btn fa fa-sign-in" title="Inscription"></a></li>
                    <li class="visible-xs-inline-block"><a href="#" class="account-btn-alt btn fa fa-user" title="Mon compte"></a></li>
                    <li><button id="header_search_toggle" class="search_toggle btn fa fa-search"></button></li>
                </ul>
                <div id="header_search_form" class="search-form animated">
                    <input type="search" name="s" autocomplete="off" placeholder="Que recherchez vous?..." class="search-field"/>
                    <button type="submit" class="btn fa fa-search"></button>
                    <button type="button" class="close_btn fa fa-close btn" title="Fermer"></button>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#main_nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="page-etablissement.php">Etudes</a></li>
                    <li class="dropdown">
                        <a href="page-metier-index.php" class="dropdown-toggle" data-toggle="dropdown">Métiers<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page-metier-index.php">Tous les secteurs</a></li>
                            <li><a href="page-metier-liste.php">Tous les métiers</a></li>
                            <li><a href="page-metier-par-secteur.php">Les métiers par secteur</a></li>
                            <li><a href="#">Portrait de pros</a></li>
                            <li><a href="#">Test Métiers</a></li>
                        </ul>
                    </li><li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Job, Stages & Emploi<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page-job-liste.php">Job</a></li>
                            <li><a href="#">Stages</a></li>
                            <li><a href="#">Emploi</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Ressources Pédagogiques</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>