<?php
$query = 'SELECT * FROM comptes WHERE id="'.$_GET['id'].'"';    // Requête pour récupere les informations du vendeur souhaité grâce à l'ID

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera la réponse dans un tableau qu'on appelle 'response'

only_admin();                                                   // page accessible uniquement par l'admin
?>

<div class='container'>

    <!-- formulaire de type POST qui récupère les infos nécessaire pour le process_updateseller.php -->
    <form class='container-sm' role='form' action='/PHP/scripts/process/vendeurs/process_updateseller.php' method='post'>
        <div class='row row-cols-1 row-cols-md-2 g-4'>
        <?php
        while($row = $statement->fetch(PDO::FETCH_ASSOC)) {             // On boucle la requête sur chaque élément de la base de données
            $response[] = $row;                                         // pour stocker dans le tableau response
                                                                        // On pourra utiliser les éléments grâce à row

            // initialisation des variables pour utiliser les informations récupérés
            $id     = $row['id'];
            $nom    = $row['nom'];
            $prenom = $row['prenom'];
            $pseudo = $row['pseudo'];
            $mdp    = $row['mdp'];
            $type   = $row['type'];
            $actif  = $row['actif'];
            ?>
            <!-- names du formulaire utilisés pour le process_updateseller.php  -->
            <input type='hidden' name='id' value='<?php echo $id ?>'>
            <div class='col text-center position-relative'>
                <label class='label' for='nom'>Nom</label>
                <input name='nom' value='<?php echo $nom ?>' autocomplete='off' type='text' class='input w-100'/>
            </div>
            <div class='col text-center position-relative'>
                <label class='label' for='prenom'>Prénom</label>
                <input name='prenom' value='<?php echo $prenom ?>' autocomplete='off' type='text' class='input w-100'/>
            </div>
            <div class='col text-center position-relative'>
                <label class='label' for='pseudo'>Pseudo</label>
                <input name='pseudo' value='<?php echo $pseudo ?>' autocomplete='off' type='text' class='input w-100'/>
            </div>
            <div class='col text-center position-relative'>
                <label class='label' for='mdp'>Mot de passe</label>
                <input name='mdp' value='<?php echo $mdp ?>' autocomplete='off' type='password' class='input w-100'/>
            </div>

        <?php
        }
        ?>
        </div>
        <div class='save-group-buttons my-4 mx-auto gap-2'>
            <button type='submit' class='bouton-principal' name='btnEnregistrerModification'>Enregistrer</button> <!--PAS A JOUR : name du bouton utilisé pour le processlogin.php-->
            <button type='submit' class='bouton-principal' name='btnAnnulerModification'>Réinitialiser</button> <!--PAS A JOUR : name du bouton utilisé pour le processlogin.php-->
        </div>
    </form>
</div>