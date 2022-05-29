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
        <h2 class='titre-section'>Gestion des clients</h2>
        <a href="/PHP/main/client/ajouter_client.php"><button class="bouton-ajout"><i class="fa-solid fa-plus"></i> Ajouter un client manuellement</button></a>
    </div>
    <div class='section-body'>
        <!-- appel de l'affichage des clients -->
        <?php include $racine.'/components/affichage/afficher_clients.php'; ?>
    </div>
</div>



<?php
include $racine.'/includes/footer.php'                  // Footer
?>