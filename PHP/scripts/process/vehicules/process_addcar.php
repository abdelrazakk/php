<?php
    $racine = '../..';
    require_once $racine.'/connexion/connexionBDD.php';         //BDD connexion
    require $racine.'/connexion/session.php';                   // utilisation de la session

    if (isset($_POST['btnAjouterVehicule'])) {                  //bouton pressé


        //récupération des infos
        $disponible     = '1';
        $marque         = trim($_POST['marque']);
        $modele         = trim($_POST['modele']);
        $prix           = trim($_POST['prix']);
        $carburant      = trim($_POST['carburant']);
        $couleur        = trim($_POST['couleur']);
        $boite          = trim($_POST['boite']);
        $kilometrage    = trim($_POST['kilometrage']);

        //requete
        $sql = "INSERT INTO vehicules (marque, modele, prix, carburant, couleur, boite, kilometrage, disponible) VALUES ('$marque', '$modele', '$prix', '$carburant', '$couleur', '$boite', '$kilometrage', '$disponible')";

        $result = mysqli_query($conn, $sql);


        if ($result) {
            ?>
            <script type='text/javascript'>
                alert('Le véhicule a été ajouté avec succès.');
                window.location = '../../../main/index.php';
            </script>
<?php
          } else {
            ?>
            <script type='text/javascript'>
                alert('Le véhicule n\'a pas pu être ajouté.');
                window.location = '../../../main/vehicule/ajouter_vehicule.php';
            </script>
<?php
          }

    }
?>