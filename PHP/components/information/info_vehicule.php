<?php
$query = 'SELECT * FROM vehicules WHERE id="'.$_GET['id'].'"';  // Requête pour récupere les informations du véhicule souhaité grâce à l'ID

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera les réponses dans un tableau qu'on appelle 'response'


?>

<div class='container'>
    
    <div class='row row-cols-1 row-cols-md-2 g-4'>
        <?php
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {             // On boucle la requête sur chaque élément de la base de données
            $response[] = $row;                                         // pour stocker dans le tableau response
                                                                        // On pourra utiliser les éléments grâce à row

            // initialisation des variables pour utiliser les informations récupérés
            $id             = $row['id'];
            $marque         = $row['marque'];
            $modele         = $row['modele'];
            $kilometrage    = $row['kilometrage'].' km';
            $carburant      = $row['carburant'];
            $couleur        = $row['couleur'];
            $boite          = $row['boite'];
            $prix           = $row['prix'].' €';
            ?>

            <input type='hidden' name='id' value='<?php echo $id ?>'>
            <div class='col position-relative text-center'>
                <label class='label' for='marque'>Marque</label>
                <input name='marque' value='<?php echo $marque ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='modele'>Modèle</label>
                <input name='modele' value='<?php echo $modele ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='kilometrage'>Kilométrage</label>
                <input name='kilometrage' value='<?php echo $kilometrage ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='carburant'>Type de carburant</label>
                <input name='carburant' value='<?php echo $carburant ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='couleur'>Couleur</label>
                <input name='couleur' value='<?php echo $couleur ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='boite'>Boîte de vitesse</label>
                <input name='boite' value='<?php echo $boite ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='prix'>Prix</label>
                <input name='prix' value='<?php echo $prix ?>' type='text' class='input text-center w-100 text-capitalize' disabled/>
            </div>
        <?php
        }
        ?>
</div>