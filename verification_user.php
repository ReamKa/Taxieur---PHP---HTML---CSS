<?php
session_start();
if(isset($_POST['rqth']) && isset($_POST['mdp'])){
   $username = $_POST['rqth'];
   $password = $_POST['mdp'];

    // connexion à la base de données
    $host = 'localhost';
    $name = 'user_data';//link de la bdd
    $user = 'root';
    $pass = '';
    $port = '3307';

    //Checker la connexion à la BDD
    try {
      	$bdd = new PDO("mysql:host=$host;port=$port;dbname=$name", $user, $pass);
      	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $eb){
      	echo "Erreur d'ouverture de la BDD" ;
    }

   
    if($username != "" && $password != ""){
      $sql = "SELECT * FROM data WHERE rqth = '$username' AND mdp = '$password'";
      //recupération dans la BDD
      
      $requete = $bdd->prepare($sql);
      //Essai d'executer 
      if($requete->execute()){
         //Checker si le username existe, si oui checker le mdp
         if($requete->rowCount() == 1){
            if($row = $requete->fetch()){
            $username = $row['rqth'];
            $hashed_password = $row['mdp'];
            echo "Connexion établie";
            if(!isset($_SESSION)){
               session_start();
           }
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;                            
          // CHANGER LA MAP §§§§§§
          header("location: get_data_h.php");
            } else {echo "impossible de se connecter";}
         } else{
            echo "RQTH ou mot de passe éronnés";
            header("Location: https://www.ain.fr/solutions/telecharger-dossier-mdph/");
         }
   } else {
      echo "RQTH ou mot de passe vides";
   }
      }
   }
?>