<?php

    $racine = '../..';

    require $racine.'/scripts/connexion/connexionBDD.php';  //BDD connexion
    require $racine.'/scripts/connexion/session.php';       //utilisation du session.php

    if (isset($_POST['btnValider'])) {                      //bouton pressé
        $identifiant    = trim($_POST['identifiant']);      //vérification id et mdp
        $pass           = trim($_POST['motDePasse']);
        $actif          = '1';
        
        
            $verification = "SELECT * FROM comptes WHERE pseudo='".$identifiant."' AND mdp='".$pass."' AND actif = $actif";
            //requete bdd (mysqli)
            //$conn défini dans connexionBDD.php
            $result = mysqli_query($conn, $verification);

            //si on obtient un résultat ($result vaut true)
            if ($result)
            {
                //on observe le nombre de ligne obtenu (1 ou 0, soit on trouve un utilisateurs soit personne dans la bdd)
                $lignes = mysqli_num_rows($result);

                //si on trouve une ligne dans la bdd grace à $result
                if($lignes == 1)
                {
                    //on stocke le resultat obtenu dans un tableau
                    $user_trouver = mysqli_fetch_array($result);

                    //on récupère les informations obtenus pour la session
                    $_SESSION['ID']         = $user_trouver['id'];
                    $_SESSION['PSEUDO']     = $user_trouver['pseudo'];
                    $_SESSION['MOTDEPASSE'] = $user_trouver['mdp'];
                    $_SESSION['TYPE']       = $user_trouver['type'];
                    $_SESSION['NOM']        = $user_trouver['nom'];
                    $_SESSION['PRENOM']     = $user_trouver['prenom'];
                    $_SESSION['ACTIF']      = $user_trouver['actif'];

                ?>
                <script type='text/javascript'>
                      window.location = '../../main/index.php'; //redirection vers le contenu souhaité 
                </script>
                <?php
                }
                else { //si lignes = 0 , donc aucune ligne n'a été trouvé dans la bdd
                ?>
                    <!--redirection vers connexion.php-->
                    <script type='text/javascript'>
                    alert('Aucun compte n\'a été trouvé avec cet identifiant ou mot de passe. Il se peut qu\'il ne soit pas activé.');
                    window.location = '../../main/connexion/connexion.php';
                    </script>
                <?php
                }
            }
        }
?>