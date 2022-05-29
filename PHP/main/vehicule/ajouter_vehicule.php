<?php
$racine = '../..';
include $racine.'/includes/header.php';                 // Header
require $racine.'/scripts/connexion/session.php';      //utilisation du session.php
include $racine.'/scripts/connexion/connexionBDD.php';  // Connexion à la BDD
include $racine.'/includes/navbar.php';                 // Navbar
only_seller_and_admin();                                // vendeur et admin seulement
?>

<link rel='stylesheet' href='../../styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Ajouter un véhicule</h2>
    </div>
    <div class='section-body'>
        <!-- appel du formulaire d'ajout de véhicules -->
        <?php include $racine.'/components/formulaire/formulaire_ajout_vehicule.php'; ?>
    </div>
    <div class='section-footer'>
        <!-- bouton retour -->
        <?php include $racine.'/includes/retour_accueil.php'; ?>
    </div>
</div>


<?php
include $racine.'/includes/footer.php'            // Footer
?>