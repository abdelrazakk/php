<?php
$racine = '../..';
include $racine.'/includes/header.php';                 // Header
require $racine.'/scripts/connexion/session.php';       // utilisation du session.php
include $racine.'/scripts/connexion/connexionBDD.php';  // Connexion à la BDD
include $racine.'/includes/navbar.php';                 // Navbar
?>
<link rel='stylesheet' href='../../styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Inscription</h2>
        <p style='font-style: italic;'>Si vous êtes un employé, veuillez contacter l'administrateur afin de créer un compte.</p>
    </div>
    <div class='section-body'>
        <!-- formulaire de type POST qui récupère les informations nécessaire à process_signup.php -->
        <form class='container-sm' role='form' action='../../scripts/connexion/process_signup.php' method='post'>
        <div class='row row-cols-1 g-4'>
            <!-- names utilisés pour le process_signup.php -->
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Nom</label>
                <input autocomplete='off' type='text' class='py-1 input w-25 mx-auto'  style='border: none!important;' name='nom' required> 
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Prénom</label>
                <input autocomplete='off' type='text' class='py-1 input w-25 mx-auto' style='border: none!important;' name='prenom' required> 
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Pseudo</label>
                <input autocomplete='off' type='text' class='py-1 input w-25 mx-auto' style='border: none!important;' name='pseudo' required> 
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Mot de passe</label>
                <input autocomplete='off' type='password' class='py-1 input w-25 mx-auto' style='border: none!important;' name='motDePasse' required> 
            </div>
        </div>
        
        <div class='save-group-buttons my-4 mx-auto'>
            <button type='submit' class='bouton-principal' name='btnInscription'>Valider</button> 
        </div>
        
        </form>
    </div>
    <div class='section-footer'>
        <!-- bouton retour -->
        <?php include $racine.'/includes/retour_accueil.php'; ?>
    </div>
</div>

<?php
include $racine.'/includes/footer.php'            // Footer
?>