<?php

    require 'connexionBDD.php';            //BDD connexion
    require 'session.php';                 //utilisation du session.php

    if (isset($_POST['btnInscription'])) {  //bouton pressé

        //récupération des infos
        $prenom     = trim($_POST['prenom']);
        $nom        = trim($_POST['nom']);
        $pseudo     = trim($_POST['pseudo']);
        $mdp        = trim($_POST['motDePasse']);
        $type       = 'client';
        $actif      = '1';

        // vérification si l'utilisateur n'existe pas déjà
        $verification = "SELECT * FROM comptes WHERE pseudo = '$pseudo'";
        $result_verification = mysqli_query($conn, $verification);
        $row_result = mysqli_num_rows($result_verification);
        if($row_result >= 1) { ?>
        <!-- si utilisateur déjà créé -->
            <script type='text/javascript'>
                alert('Pseudo déjà utilisé, veuillez en choisir un autre.');
                window.location = history.back();
            </script>
        <?php
        } else {
            // si le pseudo est disponible
            $sql = "INSERT INTO comptes (prenom, nom, pseudo, mdp, type, actif) VALUES ('$prenom', '$nom', '$pseudo', '$mdp', '$type', '$actif')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                        ?>
                        <script type='text/javascript'>
                            alert('Vous vous êtes inscrit avec succès, vous pouvez maintenant vous connecté');
                            window.location = '../../main/connexion/connexion.php';
                        </script>
            <?php
                    } else {
                        ?>
                        <script type='text/javascript'>
                            alert('Désolé, votre inscription n\'a pas été prise en compte.');
                            window.location = history.back();
                        </script>
            <?php
                    }

        }
    }
?>