<?php
ob_start(); 
$host = 'localhost';
    $name = 'user_data';//link de la bdd
    $user = 'root';
    $pass = '';
    $port = '3307';
    $i = 0;
    //Checker la connexion à la BDD
    try {
      	$bdd = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $pass);
      	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
    } catch (Exception $eb){
      	echo "Erreur d'ouverture de la BDD" ;
    } 
    session_start();
    // $adr_ecole = $_SESSION['adr_ecole'];
    // $adr_travail = $_SESSION['adr_travail'];
    // $adr_domicile = $_SESSION['adr_domicile'];

    $sql = "SELECT * FROM data ORDER BY id DESC LIMIT 1 ";
    $requete = $bdd->prepare($sql);
      //Essai d'executer 
    if($requete->execute() == false || $requete->rowCount() == 0) {
        throw new  Exception();
    }
    //lkjgkdfljgodk,
    $row = $requete->fetch();
    $adr_domicile = $row['adr_domicile'];
    $adr_travail = $row['adr_travail'];
    $adr_ecole = $row['adr_ecole'];
    $url = 'https://www.google.com/maps/dir/'. $adr_ecole . '/' . $adr_travail. '/' . $adr_domicile. '/';
    header( "Location: $url" );
    // $ecole = $_GET['adr_ecole'];
    // $travail = $_GET['adr_travail'];
    // $domicile = $_GET['adr_domicile'];
    $i++;
//$url = 'https://www.google.fr/maps/'; 
// pas de redirection
exit;
?>