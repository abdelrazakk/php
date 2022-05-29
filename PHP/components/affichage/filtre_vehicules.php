<div class="container container-filter">
    <div class='row row-cols-2 py-2'>
        <!-- liste des filtres -->
        <select class="form-select text-center select-filter" id="dropdownFilter" onchange='filterUpdate(this.options[this.selectedIndex].value)'>
            <option value=''>TRIER PAR</option>
            <option <?php if($_GET['filter'] == "marqueA") { echo "selected"; } ?> value='marqueA'>Marque (A-Z)</option>
            <option <?php if($_GET['filter'] == "marqueZ") { echo 'selected'; } ?> value='marqueZ'>Marque (Z-A)</option>
            <option <?php if($_GET['filter'] == "kilometrageC") { echo 'selected'; } ?> value='kilometrageC'>Kilométrage croissant</option>
            <option <?php if($_GET['filter'] == "kilometrageD") { echo 'selected'; } ?> value='kilometrageD'>Kilométrage décroissant</option>
            <option <?php if($_GET['filter'] == "prixC") { echo 'selected'; } ?> value='prixC'>Prix croissant</option>
            <option <?php if($_GET['filter'] == "prixD") { echo 'selected'; } ?> value='prixD'>Prix décroissant</option>
        </select>
    </div>
</div>


<script>
    // si aucun filtre n'est indiqué, on l'initiatlise sur none pour avoir une valeur et pouvoir affichage même si filter n'est pas défini
    <?php
        if(!isset($_GET['filter'])) { ?>
            window.location.replace('?filter=none');
        <?php
        }
    ?>

    // met à jour le paramètre filter en fonction de l'option choisi
    function filterUpdate(value) {
        window.location.href='?filter=' + value;
    }
</script>



<?php

    // utiliser pour les requetes SQL
    $tri = '';

    // initialisation de tri en fonction de l'option
    if(isset($_GET['filter'])) {
        if($_GET['filter'] == "marqueA")
        {
            $tri = "ORDER BY marque ASC";
        }
        
        else if($_GET['filter'] == "marqueZ")
        {
            $tri = "ORDER BY marque DESC";
        }
        
        else if($_GET['filter'] == "kilometrageC")
        {
            $tri = "ORDER BY kilometrage ASC";
        }
        
        else if($_GET['filter'] == "kilometrageD")
        {
            $tri = "ORDER BY kilometrage DESC";
        }
        
        else if($_GET['filter'] == "prixC")
        {
            $tri = "ORDER BY prix ASC";
        }
        
        else if($_GET['filter'] == "prixD")
        {
            $tri = "ORDER BY prix DESC";
        }
        
        
        else
        {
            $tri = "";
        }
    }
?>