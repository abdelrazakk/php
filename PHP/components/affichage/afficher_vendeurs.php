<?php
$query = 'SELECT * FROM comptes WHERE type = "vendeur"';        // Requête pour pour récupérer les vendeurs

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera la réponse dans un tableau qu'on appelle 'response'
?>

<!-- affichage des vendeurs -->
<div class='container'>
<div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4'>

<?php
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {         // On boucle la requête sur chaque élément de la base de données
    $response[] = $row;                                     // pour stocker dans le tableau response
    $ID=$row['id'];                                         // On pourra utiliser les éléments grâce à row
    
    ?>
        <div class='col position-relative'>
            <a href='/PHP/main/vendeur/fiche_vendeur.php?id=<?php echo $ID; ?>' class='card <?php if($row['actif']) { echo 'bouton-card'; } else { echo 'bouton-card-red'; } ?> h-100'>
            <div class='card-body'>
                <!-- affichage des informations -->
                    <h5 class='card-title'>
                        <?php
                            echo $row['prenom'].' '.$row['nom'];
                        ?>
                    </h5>

                    <p class='card-text'>
                        <?php echo $row['pseudo']; ?>
                        <span class='float-end'>
                            <?php
                                echo $row['mdp'];
                            ?>
                        </span>
                    </p>
                </div>
            </a>
            <div class='position-absolute top-100 start-50 translate-middle badge p-0'>
                <!-- modifier un vendeur -->
                <a href='/PHP/main/vendeur/modifier_vendeur.php?id=<?php echo $ID; ?>' class='p-2 <?php if($row['actif']) { echo 'bouton-card'; } else { echo 'bouton-card-red'; } ?>'>Modifier</a>
                <!-- permet d'activer ou désactiver le compte d'un vendeur -->
                <a name='btnSuppression' href='/PHP/scripts/process/vendeurs/process_stateseller.php?id=<?php echo $ID; ?>' class='p-2 <?php if($row['actif']) { echo 'bouton-card'; } else { echo 'bouton-card-red'; } ?>'><?php if($row['actif']) { echo 'Désactiver'; } else { echo 'Activer'; } ?></a>
            </div>
        </div>
<?php
}
?>


</div>
</div>