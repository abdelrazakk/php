<!-- Il existe plusieurs façon de se connecter à une base de données -->

<?php

// PDO

$utilisateur = 'root';
$motdepasse = '';

try {
    $connect = new PDO('mysql:host=localhost:3306;dbname=base_vehicules', $utilisateur, $motdepasse);
} catch (PDOException $e) {
    print 'Erreur :' . $e->getMessage() . '<br/>';
    die;
}




// mysqli

$server = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'base_vehicules';

$conn = mysqli_connect($server, $username, $password) or die('Error in connection!');
mysqli_select_db($conn, $database) or die('Could not select database');

?>