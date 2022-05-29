<?php
$racine = '..';
include $racine.'/includes/header.php';                     // Header
require $racine.'/scripts/connexion/session.php';           // utilisation du session.php
require_once $racine.'/scripts/connexion/connexionBDD.php'; // Connexion à la BDD
include $racine.'/includes/navbar.php';                     // Navbar
confirm_logged_in();                                        // doit être connecté
?>
<link rel='stylesheet' href='../styles/main.css'>



<div class='container section'>
    <div class='section-header'>
    <h2 class='titre-section'>Vos informations</h2>
    </div>
    <div class='section-body'>
        <!-- appel des informations du profil -->
        <?php include $racine.'/components/information/info_profil.php'; ?>
        <!-- bouton pour entrer en mode modification grâce à modeModification() -->
        <button onClick='modeModification()' class='bouton-principal mx-auto my-4' style='display:flex;' id='activeur_modification'>Apporter des modifications</button>
    </div>
    <div class='section-footer'>
        
    </div>
</div>

<script>
    function modeModification() {
        var boutonsModification     = document.getElementById('boutons_modification');
        var activeurModification    = document.getElementById('activeur_modification');
        const inputs                = document.querySelectorAll('.input');
        
        activeurModification.style.display = 'none';
        boutonsModification.style.display = 'flex';
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].disabled = false;
        }

    }
</script>

<?php
include $racine.'/includes/footer.php'            // Footer
?>