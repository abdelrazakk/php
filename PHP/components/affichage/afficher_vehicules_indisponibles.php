<?php

include 'filtre_vehicules.php';                                 // on intègre le filtre au fichier (filtre_vehicules.php)

$query = "SELECT * FROM vehicules WHERE disponible = 0 $tri";   // Requête pour récupérer les véhicule indisponibles de la table 'vehicules' en respectant le $tri initialisé dans filtre_vehicules.php

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera la réponse dans un tableau qu'on appelle 'response'
only_seller_and_admin();
?>


<!-- affichage des véhicules indisponibles -->
<div class='container'>
<div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4'>

<?php
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {         // On boucle la requête sur chaque élément de la base de données
    $response[] = $row;                                     // pour stocker dans le tableau response
    $ID=$row['id'];                                         // On pourra utiliser les éléments grâce à row

    ?>
        <div class='col position-relative'>
            <a href='/PHP/main/vehicule/fiche_vehicule.php?id=<?php echo $ID; ?>' class='card bouton-card h-100'>
                <div class='card-body'>
                    <!-- affichage des infos dans le card -->
                    <h5 class='card-title'>
                        <?php
                            echo $row['marque'].' - '.$row['modele'];
                        ?>
                    </h5>

                    <p class='card-text'>
                        <?php echo $row['carburant']; ?>
                        <span class='float-end'>
                            <?php
                                echo $row['prix'].' €';
                            ?>
                        </span>
                    </p>
                </div>
            </a>
            <!-- Repasse un véhicule en état 'disponible' (donc affiché dans l'index) -->
            <div class='position-absolute top-100 start-50 translate-middle badge p-0'>
                <a name='btnSuppression' href='/PHP/scripts/process/vehicules/process_statecar.php?id=<?php echo $ID; ?>' class='p-2 bouton-card bouton-gestion'>Remettre</a>
            </div>
        </div>
<?php
}

// si aucun véhicule n'est indisponible, affiche un texte qui l'indique
if(sizeof($response) <= 0) { ?>
    <div class='w-100 text-center mt-5'><p>Aucun véhicule n'est considéré comme indisponible.</p></div>
<?php
}
?>

</div>
</div>