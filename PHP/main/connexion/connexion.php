<?php
$racine = '../..';
include $racine.'/includes/header.php';                 // Header
require $racine.'/scripts/connexion/session.php';       //utilisation du session.php
include $racine.'/scripts/connexion/connexionBDD.php';  // Connexion à la BDD
include $racine.'/includes/navbar.php';                 // Navbar
?>
<link rel='stylesheet' href='../../styles/main.css'>

<div class='container section'>
    <div class='section-header'>
        <h2 class='titre-section'>Connexion</h2>
    </div>
    <div class='section-body'>

    <p class='text-center'>Pas de compte ? <a href="inscription.php">Inscrivez-vous</a>.</p>

        <!-- formulaire de type POST qui récupère les informations nécessaire à process_login.php -->
        <form class='container-sm' role='form' action='../../scripts/connexion/process_login.php' method='post'>
            <div class='row row-cols-1 g-4'>
                <!-- names utilisés pour le process_login.php -->
                <div class='col text-center d-flex flex-column'>
                    <label class='label form-label'>Pseudo</label>
                    <input autocomplete='off' type='text' class='input mx-auto w-25 py-1' name='identifiant' style='border: none!important;' required>
                </div>
                <div class='col text-center d-flex flex-column'>
                    <label class='label form-label'>Mot de passe</label>
                    <input autocomplete='off' type='password' class='input mx-auto w-25 py-1' name='motDePasse' style='border: none!important;' required>
                </div>
            </div>
            <div class='save-group-buttons my-4 mx-auto gap-2'>
                <button type='submit' class='bouton-principal' name='btnValider'>Valider</button> 
            </div>
        </form>
        
    </div>
    <div class='section-footer'>
        <!-- bouton retour -->
        <?php include $racine.'/includes/retour_accueil.php'; ?>
    </div>
</div>



<?php
include $racine.'/includes/footer.php';            // Footer
?>