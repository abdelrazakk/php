<?php

    $racine = '..';
    require_once $racine.'/connexion/connexionBDD.php';         //BDD connexion
    require $racine.'/connexion/session.php';                   // utilisation de la session

    if (isset($_POST['btnEnregistrerModification'])) {          //bouton enregsitré pressé

        //récupération des infos
        $prenom = trim($_POST['prenom']);
        $nom    = trim($_POST['nom']);
        $pseudo = trim($_POST['pseudo']);
        $mdp    = trim($_POST['mdp']);
        $id     = trim($_POST['id']);

        //requete
        $sql = "UPDATE comptes SET prenom = '$prenom', nom = '$nom', pseudo = '$pseudo', mdp = '$mdp' WHERE id = '$id';";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            ?>
            <script type='text/javascript'>
                window.location = '../../main/profil.php?id=<?php echo $id; ?>';
            </script>
<?php
          } else {
            ?>
            <script type='text/javascript'>
                alert('Le client n\'a pas pu être modifié.');
                window.location = '../../main/profil.php?id=<?php echo $id; ?>';
            </script>
<?php
          }

    }

    if (isset($_POST['btnAnnulerModification'])) {           // bouton annuler pressé

        // récupération des infos
        $ID             = trim($_POST['id']);
        
        ?>
    
        <script type='text/javascript'>
            window.location = '../../main/profil.php?id=<?php echo $ID; ?>'; // on actualise sans rien modifier
        </script>
    <?php
    }
?>