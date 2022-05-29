<!-- formulaire de type POST qui récupère les infos nécessaire pour le process_addcar.php -->


<form class='container-sm' role='form' action='/PHP/scripts/process/vehicules/process_addcar.php' method='post'>
    <div class='row row-cols-1 row-cols-md-2 g-4'>
        <!-- names du formulaire utilisés pour le process_addcar.php  -->
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Marque</label>
            <input autocomplete='off' type='text' class='py-1 input w-100 mx-auto' placeholder='Marque' name='marque' required> 
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Modèle</label>
            <input autocomplete='off' type='text' class='py-1 input w-100 mx-auto' placeholder='Modèle' name='modele' required> 
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Prix</label>
            <input autocomplete='off' type='number' class='py-1 input w-100 mx-auto' placeholder='Prix' name='prix' required> 
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Carburant</label>
            <select class='py-1 input w-100 mx-auto' required name='carburant'>
                <option value='' selected>Carburant</option>                                               
                <option value='diesel'>Diesel</option>
                <option value='essence'>Essence</option>
                <option value='gpl'>GPL</option>
                <option value='electrique'>Éléctrique</option>
            </select> 
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Couleur</label>
            <input autocomplete='off' type='text' class='py-1 input w-100 mx-auto' placeholder='Couleur' name='couleur' required> 
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Boîte</label>
            <select class='py-1 input w-100 mx-auto' required name='boite'>
                <option value='' selected>Boîte</option>                                               
                <option value='automatique'>Automatique</option>
                <option value='manuelle'>Manuelle</option>
            </select>
        </div>
        <div class='d-flex flex-column col text-center'>
            <label class='label form-label'>Kilométrage</label>
            <input autocomplete='off' type='number' class='py-1 input w-100 mx-auto' placeholder='Kilométrage' name='kilometrage' required> 
        </div>
    </div>
    <div class='save-group-buttons my-4 mx-auto gap-2'>
        <button type='submit' class='bouton-principal' name='btnAjouterVehicule'>Valider</button> 
    </div>
</form>
