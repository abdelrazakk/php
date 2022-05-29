<?php

    session_start();                // on ouvre une session

    function logged_in()            // fonction pour vérifier si on est connecté, utilisé sur les pages du sites
    {
        return isset($_SESSION['ID']);  // On attribue un ID
    }

    function confirm_logged_in() {  // si ce n'est pas le cas, on redirige vers la page de connexion
        if (!logged_in()) {             
        ?>

        <script type='text/javascript'>     //redirection vers connexion.php
            alert('Connectez-vous avant de pouvoir accéder à cette page.');
            window.location = '/PHP/main/connexion/connexion.php';
        </script>

        <?php
        }
    }


    // fonction qui autorise uniquement les vendeurs et les admins (sur les pages)
    function only_seller_and_admin() {
        if (logged_in() && $_SESSION['TYPE'] == 'client') { ?>
            <script type='text/javascript'>    
                alert('Accès refusé.');
                window.location = '/PHP/main/index.php';
            </script>

        <?php
        }
    }

    // fonction qui autorise uniquement les admins (sur les pages)
    function only_admin() {
        if (logged_in()) {
            if($_SESSION['TYPE'] == 'client' || $_SESSION['TYPE'] == 'vendeur') { ?>
            <script type='text/javascript'>    
                alert('Accès refusé.');
                window.location = '/PHP/main/index.php';
            </script>
            <?php
            }
        }
    }
?>