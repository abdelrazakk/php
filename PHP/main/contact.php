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
        <h2 class='titre-section'>Contact</h2>
    </div>
    <div class='section-body'>
        <div class='row row-cols-1 g-4'>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Numéro de téléphone</label>
                <input disabled type='text' value='06 52 49 68 44' class='input mx-auto w-50 py-1' style='border: none!important;' required>
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Adresse mail</label>
                <input disabled type='text' value='ammara.abdelrazak@gmail.com' class='input mx-auto w-50 py-1' style='border: none!important;' required>
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Adresse postale</label>
                <input disabled type='text' value='22 rue Joliot Curie, Souppes-Sur-Loing 77460' class='input mx-auto w-50 py-1' style='border: none!important;' required>
            </div>
            <div class='col text-center d-flex flex-column'>
                <label class='label form-label'>Réseaux</label>
                <div class='d-flex flex-row mx-auto py-1'>
                    <a target='blank' href='https://www.linkedin.com/in/abdelrazak-ammara-a36316199/'><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fa-linkedin {
        font-size: 3rem;
    }
</style>

<?php
include $racine.'/includes/footer.php'            // Footer
?>