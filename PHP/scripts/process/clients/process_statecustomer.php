<?php
    $racine = '../..';
    require_once $racine.'/connexion/connexionBDD.php';        //BDD connexion
    require $racine.'/connexion/session.php';

    
    //recup des donnees
    $id = $_GET['id'];
    
    // change l'état d'actif (comptes)
    $updateCustomer = "UPDATE comptes 
            SET actif = IF(actif = 0, 1, 0)
            WHERE id = '$id';";
    $result = mysqli_query($conn, $updateCustomer);


        if ($result) {
            ?>
            <script type='text/javascript'>     //redirection vers connexion.php
                window.location = history.back();
            </script>
            
<?php
          } else {
            ?>
            <script type='text/javascript'>     //redirection vers connexion.php
                alert('Oops ! Cela n\'a pas fonctionné !');
                window.location = history.back();
            </script>
<?php
          }
?>