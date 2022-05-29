<button class='bouton-principal my-3' onclick='previousPage()'>
    <i style='color: rgb(0, 110, 184)!important;' class="fa-solid fa-circle-chevron-left"></i> Retour
</button>

<style>

</style>

<script>
    function previousPage() {
        window.location = history.back().back();        // récupère le lien précédent dans l'historique du navigateur
    }
</script>