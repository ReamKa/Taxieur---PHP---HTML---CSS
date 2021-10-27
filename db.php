<?php
// Opens a connection to a MySQL server.
$host = 'localhost';
    $name = 'user_data';//link de la bdd
    $user = 'root';
    $pass = '';
    $port = '3307';
    //Checker la connexion à la BDD
    try {
      	$bdd = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $pass);
      	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    } catch (Exception $eb){
      	echo "Erreur d'ouverture de la BDD" ;
    }

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/