<?php
$query = 'SELECT * FROM vehicules WHERE id="'.$_GET['id'].'"';  // Requête pour récupere les informations du véhicule souhaité grâce à l'ID

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera les réponses dans un tableau qu'on appelle 'response'

only_seller_and_admin();                                        // seul les employés y ont accès
?>

<div class='container'>
    <!-- formulaire de type POST qui récupère les infos nécessaire pour le process_updatecar.php -->
    <form class='container-sm' role='form' action='/PHP/scripts/process/vehicules/process_updatecar.php' method='post'>
    
    <div class='row row-cols-1 row-cols-md-2 g-4'>
        <?php
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {             // On boucle la requête sur chaque élément de la base de données
            $response[] = $row;                                         // pour stocker dans le tableau response
                                                                        // On pourra utiliser les éléments grâce à row

            // initialisation des variables pour utiliser les informations récupérés
            $id             = $row['id'];
            $marque         = $row['marque'];
            $modele         = $row['modele'];
            $kilometrage    = $row['kilometrage'];
            $carburant      = $row['carburant'];
            $couleur        = $row['couleur'];
            $boite          = $row['boite'];
            $prix           = $row['prix'];
            ?>

            <!-- names du formulaire utilisés pour le process_updatecar.php  -->
            <input type='hidden' name='id' value='<?php echo $id ?>'>
            <div class='col position-relative text-center'>
                <label class='label' for='marque'>Marque</label>
                <input autocomplete='off' name='marque' value='<?php echo $marque ?>' type='text' class='input text-center w-100 text-capitalize'/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='modele'>Modèle</label>
                <input autocomplete='off' name='modele' value='<?php echo $modele ?>' type='text' class='input text-center w-100 text-capitalize'/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='kilometrage'>Kilométrage</label>
                <input autocomplete='off' name='kilometrage' value='<?php echo $kilometrage ?>' type='text' class='input text-center w-100 text-capitalize'/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='carburant'>Type de carburant</label>
                <select class='py-1 input w-100 mx-auto' required name='carburant'>
                    <?php if($carburant == 'diesel') { echo '<option selected value="diesel">Diesel</option>'; } else { echo '<option value="diesel">Diesel</option>'; } ?>
                    <?php if($carburant == 'essence') { echo '<option selected value="essence">Essence</option>'; } else { echo '<option value="essence">Essence</option>'; } ?>
                    <?php if($carburant == 'gpl') { echo '<option selected value="gpl">GPL</option>'; } else { echo '<option value="gpl">GPL</option>'; } ?>
                    <?php if($carburant == 'electrique') { echo '<option selected value="electrique">Electrique</option>'; } else { echo '<option value="electrique">Electrique</option>'; } ?>
                </select> 
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='couleur'>Couleur</label>
                <input autocomplete='off' name='couleur' value='<?php echo $couleur ?>' type='text' class='input text-center w-100 text-capitalize'/>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='boite'>Boîte de vitesse</label>
                <select class='py-1 input w-100 mx-auto' required name='boite'>
                    <?php if($boite == 'manuelle') { echo '<option selected value="manuelle">Manuelle</option>'; } else { echo '<option value="manuelle">Manuelle</option>'; } ?>
                    <?php if($boite == 'automatique') { echo '<option selected value="automatique">Automatique</option>'; } else { echo '<option value="automatique">Automatique</option>'; } ?>
                </select>
            </div>
            <div class='col position-relative text-center'>
                <label class='label' for='prix'>Prix</label>
                <input autocomplete='off' name='prix' value='<?php echo $prix ?>' type='text' class='input text-center w-100 text-capitalize'/>
            </div>
        <?php
        }
        ?>
        </div>
        <div class='save-group-buttons my-4 mx-auto gap-2'>
            <button type='submit' class='bouton-principal' name='btnEnregistrerModification'>Enregistrer</button>
            <button type='submit' class='bouton-principal' name='btnAnnulerModification'>Réinitialiser</button>
        </div>
    </form>

</div>