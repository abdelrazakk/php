<?php
$racine = '../..';
include $racine.'/includes/header.php';                 // Header
require $racine.'/scripts/connexion/session.php';       // utilisation du session.php
include $racine.'/scripts/connexion/connexionBDD.php';  // Connexion à la BDD
include $racine.'/includes/navbar.php';                 // Navbar
only_admin();                                           // admin uniquement
?>
<link rel='stylesheet' href='../../styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Information sur le vendeur</h2>
    </div>
    <div class='section-body'>
        <!-- appel des informations du vendeur -->
        <?php include $racine.'/components/information/info_vendeur.php'; ?>
    </div>

    </div>
    <div class='section-footer'>
        <!-- bouton retour -->
        <?php include $racine.'/includes/retour_accueil.php'; ?>
    </div>
</div>



<?php
include $racine.'/includes/footer.php'            // Footer
?>