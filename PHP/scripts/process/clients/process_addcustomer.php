<?php
    $racine = '../..';
    require_once $racine.'/connexion/connexionBDD.php';     // BDD connexion
    require $racine.'/connexion/session.php';               // utilisation de la session

    if (isset($_POST['btnAjouterClient'])) {                //bouton pressé


        //récupération des infos
        $type   = 'client';
        $actif  = '1';
        $prenom = trim($_POST['prenom']);
        $nom    = trim($_POST['nom']);
        $pseudo = trim($_POST['pseudo']);
        $mdp    = trim($_POST['mdp']);



        // on vérifie que le compte n'existe pas déjà
        $verification = "SELECT * FROM comptes WHERE pseudo = '$pseudo'";
        $result_verification = mysqli_query($conn, $verification);
        $row_result = mysqli_num_rows($result_verification);
        // si le pseudo existe
        if($row_result >= 1) { ?>
            <script type='text/javascript'>
                alert('Pseudo déjà utilisé, veuillez en choisir un autre.');
                window.location = history.back();
            </script>
        <?php
        } else {
            // si le pseudo est libre
            $sql = "INSERT INTO comptes (prenom, nom, pseudo, mdp, type, actif) VALUES ('$prenom', '$nom', '$pseudo', '$mdp', '$type', '$actif')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                        ?>
                        <script type='text/javascript'>
                            alert('Le client a été ajouté avec succès.');
                            window.location = '../../../main/client/gestion_clients.php';
                        </script>
            <?php
                    } else {
                        ?>
                        <script type='text/javascript'>
                            alert('Le client n\'a pas pu être ajouté.');
                            window.location = '../../../main/client/ajouter_client.php';
                        </script>
            <?php
                    }
        }
    }
?>
