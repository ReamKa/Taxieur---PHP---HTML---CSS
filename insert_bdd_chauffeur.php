

<?php
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
      	echo "Erreur d'ouverture de la BDD" ;
    }
    //checker si on a bien toutes les valeurs et les stocker

    $num_agrement = $_POST['num_agrement'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if ((isset($_POST['vehicule']))){
      $vehicule = $_POST['vehicule'];
    } else {
      $vehicule = null;
    }

    /*if ((isset($_POST['secteur_souhaite']))){
      $vehicule = $_POST['secteur_souhaite'];
    } else {
      $secteur_souhaite = null;
    }*/
  

		$sql = "INSERT INTO `chauffeur_data` (`num_agrement`, `nom`, `prenom`, `vehicule`
    ) VALUES ('$num_agrement' , '$nom', '$prenom', '$vehicule')";



        //insertion dans la BDD
        try {
          $requete = $bdd->prepare($sql);
          $requete->execute();

        } catch (Exception $e){
          print_r($bdd->errorInfo(),TRUE);
          var_dump($e->getMessage());
        }
        // $rs = $requete->fetchAll();
        //var_dump($rs);

    //fermer la bdd
    $bdd -> connexion = null;
 ?>