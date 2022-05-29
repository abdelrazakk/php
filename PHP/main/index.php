<?php
$racine = '..';
include $racine.'/includes/header.php';                     // Header
require $racine.'/scripts/connexion/session.php';           // utilisation du session.php
require_once $racine.'/scripts/connexion/connexionBDD.php'; // Connexion à la BDD
include $racine.'/includes/navbar.php';                     // Navbar

?>

<link rel='stylesheet' href='/PHP/styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Nos véhicules disponibles</h2>
        <?php
            // bouton ajout de véhicule uniquement si vendeur ou admin
            if (logged_in()) {
                if($_SESSION['TYPE'] == 'vendeur' || $_SESSION['TYPE'] == 'administrateur') {
                    echo '<a href="/PHP/main/vehicule/ajouter_vehicule.php"><button class="bouton-ajout"><i class="fa-solid fa-car-side"></i> <i class="fa-solid fa-plus"></i></button></a>';
                }
            }
        ?>
    </div>
    <div class='section-body'>
        <!-- appel affichage des véhicules -->
        <?php include ($racine.'/components/affichage/afficher_vehicules.php'); ?>
    </div>
</div>



<?php
include $racine.'/includes/footer.php'            // Footer
?>