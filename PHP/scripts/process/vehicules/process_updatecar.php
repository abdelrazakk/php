<?php
    $racine = '../..';
    require_once $racine.'/connexion/connexionBDD.php';         //BDD connexion
    require $racine.'/connexion/session.php';                   // utilisation de la session

    if (isset($_POST['btnEnregistrerModification'])) {          //bouton enregsitré pressé

        //récupération des infos
        $marque         = trim($_POST['marque']);
        $modele         = trim($_POST['modele']);
        $kilometrage    = trim($_POST['kilometrage']);
        $carburant      = trim($_POST['carburant']);
        $couleur        = trim($_POST['couleur']);
        $boite          = trim($_POST['boite']);
        $prix           = trim($_POST['prix']);
        $id             = trim($_POST['id']);

        // requete
        $sql = "UPDATE vehicules SET marque = '$marque', modele = '$modele', kilometrage = '$kilometrage', carburant = '$carburant', couleur = '$couleur', boite = '$boite', prix = '$prix' WHERE id = '$id';";
        $result = mysqli_query($conn, $sql);


        if ($result) {
            ?>
            <script type='text/javascript'>
                window.location = '../../../main/index.php';
            </script>
<?php
          } else {
            ?>
            <script type='text/javascript'>
                alert('Le véhicule n\'a pas pu être modifié.');
                window.location = '../../../main/index.php';
            </script>
<?php
          }

    }

    if (isset($_POST['btnAnnulerModification'])) {           // bouton annuler pressé
        
        // récupération des infos
        $ID = trim($_POST['id']);
        
        ?>
    
        <script type='text/javascript'>
            window.location = '../../../main/vehicule/modifier_vehicule.php?id=<?php echo $ID; ?>'; // on actualise sans rien modifier
        </script>
    <?php
    }
?>