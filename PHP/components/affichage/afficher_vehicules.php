<?php

include 'filtre_vehicules.php';                                 // on intègre le filtre au fichier (filtre_vehicules.php)

$query = "SELECT * FROM vehicules WHERE disponible = 1 $tri";   // Requête pour récupérer les véhicule disponibles de la table 'vehicules' en respectant le $tri initialisé dans filtre_vehicules.php

$statement = $connect->prepare($query);                         // On prépare la requête en créant un objet
$statement->execute();                                          // On éxecute la requête query
$response = array();                                            // On récupèrera la réponse dans un tableau qu'on appelle 'response'

?>

<!-- affichage des véhicules -->
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
                    <h5 class='card-title'>
                        <!-- affichage de quelques infos sur le véhicule -->
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
            <?php
            // accessible uniquement par les employés
            if(logged_in()) { 
                if($_SESSION['TYPE'] == 'vendeur' || $_SESSION['TYPE'] == 'administrateur') { ?>
                <div class='position-absolute top-100 start-50 translate-middle badge p-0'>
                    <!-- modifier le véhicule -->
                    <a href='/PHP/main/vehicule/modifier_vehicule.php?id=<?php echo $ID; ?>' class='p-2 bouton-card bouton-gestion'><i class="fa-solid fa-gears"></i></a>
                    <!-- passe un véhicule en état 'indisponible' -->
                    <a name='btnSuppression' href='/PHP/scripts/process/vehicules/process_statecar.php?id=<?php echo $ID; ?>' class='p-2 bouton-card bouton-gestion'><i class="fa-solid fa-trash-can"></i></a>
                </div>
            <?php } } ?>
        </div>
<?php
}
?>


</div>
</div>