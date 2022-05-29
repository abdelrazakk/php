<?php
$racine = '../..';
include $racine.'/includes/header.php';                 // Header
require $racine.'/scripts/connexion/session.php';       // utilisation du session.php
include $racine.'/scripts/connexion/connexionBDD.php';  // Connexion à la BDD
include $racine.'/includes/navbar.php';                 // Navbar
only_seller_and_admin();                                // admin et vendeur seulement
?>

<link rel='stylesheet' href='../../styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Gestion des véhicules indisponibles</h2>
    </div>
    <div class='section-body'>
        <!-- appel affichage des véhicules indisponibles -->
        <?php include $racine.'/components/affichage/afficher_vehicules_indisponibles.php'; ?>
    </div>
</div>



<?php
include $racine.'/includes/footer.php'            // Footer
?>