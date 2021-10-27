<?php
session_start();
if(isset($_POST['num_agrement'])){
   $username = $_POST['num_agrement'];
   //$password = $_POST['mdp'];

    // connexion à la base de données
    $host = 'localhost';
    $name = 'chauffeur_data';//link de la bdd
    $user = 'root';
    $pass = '';
    $port = '3307';

    //Checker la connexion à la BDD
    try {
      	$bdd = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $pass);
      	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $eb){
      	echo "Erreur d'ouverture de la BDD";
    }
   
    if($username != ""){
        $sql = "SELECT * FROM chauffeur_data WHERE num_agrement = '$username'";
        //recupération dans la BDD
        
        $requete = $bdd->prepare($sql);
        //Essai d'executer 
        if($requete->execute()){
           //Checker si le username existe
           if($requete->rowCount() == 1){
              if($row = $requete->fetch()){
              $username = $row['num_agrement'];
              //$hashed_password = $row['mdp'];
              echo "Connexion établie";
              if(!isset($_SESSION)){
                 session_start();
             }
              $_SESSION["loggedin"] = true;
              $_SESSION["username"] = $username;                            
            // RENVOYER VERS UNE PAGE DES HANDICAPES !!!
            //header("location: delivery-directions.html");
            header("Location: map.php");
            //exit;
              } else {echo "impossible de se connecter";}
           } else{
              header("Location: https://www.ameli.fr/paris/transporteur-sanitaire/exercice-professionnel/vie-entreprise/adhesion-convention");
              echo "Numero d'agrement ou données éronnées.";}
     } else {
        echo "Numero d'agrement vide";
     }
        }
   }
?>