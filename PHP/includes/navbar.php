<link rel='stylesheet' href='/PHP/styles/navbar.css'>

<!-- logo -->
<div class='container'>
    <div class='logo-navbar'>
        <div class='text-logo-navbar'>
            <a href='/PHP/main/index.php'>AUTO</a>
        </div>
        <div class='icon-logo-navbar'>
            <a href='/PHP/main/index.php'><i class='fa-solid fa-car'></i></a>
        </div>
        <div class='text-logo-navbar'>
            <a href='/PHP/main/index.php'>SHOP</a>
        </div>
    </div>


    
    <nav class='navbar <?php
    // affichage limite pour le navbar en fonction du compte (plus de contenu à afficher sur le navbar)
    if(logged_in()) {
        if ($_SESSION['TYPE'] == 'administrateur' || $_SESSION['TYPE'] == 'vendeur') {
            echo "navbar-expand-lg"; }
        else {
            echo "navbar-expand-md"; }
    }
    else {
        echo "navbar-expand-md"; }
    ?> barre-navigation'>
        <div class='container-fluid'>
            
            <!-- bouton pour dérouler le menu (petit écran) -->
            <button class='navbar-toggler mx-auto bouton-menu' style='box-shadow: none; outline: none; color: black;' type='button' data-toggle='collapse' data-target='#navbar-menu'>
                <span class='my-auto navbar-toggle-icon'><i class='bi bi-list'></i> MENU</span>
            </button>

            <!-- menu avec les élements de la navbar -->
            <div class='collapse navbar-collapse' id='navbar-menu'>
                <hr>
                <ul class='navbar-nav mx-auto'>
        <?php 

        // affichage en fonction du type de compte 

        if(logged_in()) {
            $ID = $_SESSION['ID'];
            if($_SESSION['TYPE'] == 'vendeur') { ?>
                <!-- vendeur -->
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/index.php' || $_SERVER['PHP_SELF'] == '/PHP/main/vehicule/fiche_vehicule.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/index.php"'>Accueil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/profil.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/profil.php?id=<?php echo $ID; ?>"'>Mon profil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/vehicule/gestion_vehicules.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/vehicule/gestion_vehicules.php"'>Véhicules indisponibles</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/contact.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/contact.php"'>Contact</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/scripts/connexion/process_logout.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/scripts/connexion/process_logout.php"'>Déconnexion</button></li>
            <?php
            }
            else if($_SESSION['TYPE'] == 'administrateur') { ?>
                <!-- administrateur -->
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/index.php' || $_SERVER['PHP_SELF'] == '/PHP/main/vehicule/fiche_vehicule.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/index.php"'>Accueil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/profil.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/profil.php?id=<?php echo $ID; ?>"'>Mon profil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/client/gestion_clients.php' || $_SERVER['PHP_SELF'] == '/PHP/main/client/ajouter_client.php' || $_SERVER['PHP_SELF'] == '/PHP/main/client/modifier_client.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/client/gestion_clients.php"'>Gérer les clients</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/vendeur/gestion_vendeurs.php' ||  $_SERVER['PHP_SELF'] == '/PHP/main/vendeur/ajouter_vendeur.php' || $_SERVER['PHP_SELF'] == '/PHP/main/vendeur/modifier_vendeur.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/vendeur/gestion_vendeurs.php"'>Gérer les vendeurs</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/vehicule/gestion_vehicules.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;'  onclick='location.href="/PHP/main/vehicule/gestion_vehicules.php"'>Véhicules indisponibles</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/contact.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/contact.php"'>Contact</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/scripts/connexion/process_logout.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/scripts/connexion/process_logout.php"'>Déconnexion</button></li>
            <?php
            }
            else { ?>
                <!-- client -->
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/index.php' || $_SERVER['PHP_SELF'] == '/PHP/main/vehicule/fiche_vehicule.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/index.php"'>Accueil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/profil.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/profil.php?id=<?php echo $ID; ?>"'>Mon profil</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '#') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="#"'>Mes favoris</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/contact.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/contact.php"'>Contact</button></li>
                <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/scripts/connexion/process_logout.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/scripts/connexion/process_logout.php"'>Déconnexion</button></li>
            <?php
            }
        }
        else { ?>
            <!-- invité  -->
            <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/index.php' || $_SERVER['PHP_SELF'] == '/PHP/main/vehicule/fiche_vehicule.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/index.php"'>Accueil</button></li>
            <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/contact.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/contact.php"'>Contact</button></li>
            <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/connexion/connexion.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/connexion/connexion.php"'>Connexion</button></li>
            <li><button class='<?php if($_SERVER['PHP_SELF'] == '/PHP/main/connexion/inscription.php') { echo 'selected-nav-link '; } ?>nav-link' type='button' style='color: black;' onclick='location.href="/PHP/main/connexion/inscription.php"'>Inscription</button></li>
        <?php
        }
        ?>
                </ul>
            </div>
        </div>
    </nav>
</div>