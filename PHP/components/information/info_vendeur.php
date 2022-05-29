<?php
$query = 'SELECT * FROM comptes WHERE id="'.$_GET['id'].'"';    // Requête pour récupere les informations du vendeur souhaité grâce à l'ID

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera les réponses dans un tableau qu'on appelle 'response'

only_admin();                                                   // accessible par l'admin seulement
?>

<div class='container'>    
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

            <input type='hidden' name='id' value='<?php echo $id ?>'>
            <div class='col text-center position-relative'>
                <label class='label' for='nom'>Nom</label>
                <input name='nom' value='<?php echo $nom ?>' type='text' class='input w-100' disabled/>
            </div>
            <div class='col text-center position-relative'>
                <label for='prenom'>Prénom</label>
                <input name='prenom' value='<?php echo $prenom ?>' type='text' class='input w-100' disabled/>
            </div>
            <div class='col text-center position-relative'>
                <label for='pseudo'>Pseudo</label>
                <input name='pseudo' value='<?php echo $pseudo ?>' type='text' class='input w-100' disabled/>
            </div>
            <div class='col text-center position-relative'>
                <label for='mdp'>Mot de passe</label>
                <input name='mdp' value='<?php echo $mdp ?>' type='password' class='input w-100' disabled/>
            </div>
            <div class='col text-center position-relative'>
                <label for='actif'>Actif</label>
                <!-- affichage 'actif' ou non -->
                <input name='actif' value='<?php if($actif == '1') { echo 'Actif'; } else { echo 'Inactif'; }?>' type='text' class='input w-100' disabled/>
            </div>
        <?php
        }
        ?>
</div>