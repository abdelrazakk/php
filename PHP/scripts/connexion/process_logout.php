<?php

//on ouvre la session
session_start();
 
//on supprime les infos de la session actuelle
unset($_SESSION['ID']);
unset($_SESSION['PSEUDO']);
unset($_SESSION['MOTDEPASSE']);
unset($_SESSION['TYPE']);
unset($_SESSION['NOM']);
unset($_SESSION['PRENOM']);
unset($_SESSION['ACTIF']);

?>
<script type='text/javascript'>
    window.location = '/PHP/main/index.php'; //redirection
</script>