<?php
$query = 'SELECT * FROM comptes WHERE id="'.$_GET['id'].'"';    // Requête pour récupere les informations du compte connecté grâce à l'ID

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera les réponses dans un tableau qu'on appelle 'response'
confirm_logged_in();                                            // doit être connecté
?>


<div class='container'>
    <!-- formulaire de type POST qui récupère les infos nécessaire pour le process_updateprofile.php -->
    <form class='container-sm' role='form' action='/PHP/scripts/process/process_updateprofile.php' method='post'>
        <div class='row row-cols-1 row-cols-md-2 g-4'>
            <?php
            while($row = $statement->fetch(PDO::FETCH_ASSOC)) {             // On boucle la requête sur chaque élément de la base de données
                $response[] = $row;                                         // pour stocker dans le tableau response
                                                                            // On pourra utiliser les éléments grâce à row
            ?>
                <!-- names du formulaire utilisés pour le process_updateprofile.php  -->
                <input type='hidden' name='id' value='<?php echo $row['id'] ?>'>
                <div class='col text-center'>
                    <label class='label' for='prenom'>Prénom</label>
                    <input name='prenom' value='<?php echo $row['prenom'] ?>' autocomplete='off' type='text' class='input text-center w-100 text-capitalize' disabled/>
                </div>
                <div class='col text-center'>
                    <label class='label' for='nom'>Nom</label>
                    <input name='nom' value='<?php echo $row['nom'] ?>' autocomplete='off' type='text' class='input text-center w-100 text-capitalize' disabled/>
                </div>
                <div class='col text-center'>
                    <label class='label' for='pseudo'>Pseudo</label>
                    <input name='pseudo' value='<?php echo $row['pseudo'] ?>' autocomplete='off' type='text' class='input text-center w-100' disabled/>
                </div>
                <div class='col text-center'>
                    <label class='label' for='mdp'>Mot de passe</label>
                    <input name='mdp' value='<?php echo $row['mdp'] ?>' autocomplete='off' type='password' class='input text-center w-100' disabled/>
                </div>
            <?php
            }
            ?>
            <div style='display: none;' id='boutons_modification' class='save-group-buttons my-4 mx-auto gap-2'>
                <button type='submit' class='bouton-principal' name='btnEnregistrerModification'>Enregistrer</button> 
                <button type='submit' class='bouton-principal' name='btnAnnulerModification'>Annuler les modifications</button> 
            </div>
        </div>
    </form>
</div>