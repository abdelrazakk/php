<!-- formulaire de type POST qui récupère les infos nécessaire pour le process_addseller.php -->


<form class='container-sm' role='form' action='/PHP/scripts/process/vendeurs/process_addseller.php' method='post'>
<div class='row row-cols-1 row-cols-md-2 g-4'>
    <!-- names du formulaire utilisés pour le process_addseller.php  -->
    <div class='col text-center'>
        <label class='label form-label'>Nom</label>
        <input autocomplete='off' type='text' class='input form-control' placeholder='Nom' name='nom' required>
    </div>
    <div class='col text-center'>
        <label class='label form-label'>Prénom</label>
        <input autocomplete='off' type='text' class='input form-control' placeholder='Prénom' name='prenom' required>
    </div>
    <div class='col text-center'>
        <label class='label form-label'>Pseudo</label>
        <input autocomplete='off' type='text' class='input form-control' placeholder='Pseudo' name='pseudo' required>
    </div>
    <div class='col text-center'>
        <label class='label form-label'>Mot de passe</label>
        <input autocomplete='off' type='text' class='input form-control' placeholder='Mot de passe' name='mdp' required>
    </div>
</div>
    <div class='save-group-buttons my-4 mx-auto gap-2'>
        <button type='submit' class='bouton-principal' name='btnAjouterVendeur'>Valider</button>
    </div>
</form>