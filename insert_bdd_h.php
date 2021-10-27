

<?php
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
    //checker si on a bien toutes les valeurs et les stocker

        $adr_travail = $_POST['adr_travail'];
        $adr_domicile = $_POST['adr_domicile'];
        $adr_ecole = $_POST['adr_ecole'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $rqth = $_POST['rqth'];
        $mdp = $_POST['mdp'];

        /*$sql = "INSERT INTO 'data' (`adr_domicile`, `adr_travail`,
          `adr_ecole`, `nom`,`prenom`, `rqth`,`mdp`)
         VALUES (:adr_domicile, :adr_travail, :adr_ecole, :nom,
            :prenom, :rqth,:mdp)";*/
			// INSERT INTO `data` (`id`, `rqth`, `nom`, `prenom`, `adr_domicile`, `adr_ecole`, `adr_travail`, `mdp`) VALUES (NULL, '123', 'test', 'test', 'test', 'test', 'test', 'test');
		$sql = "INSERT INTO `data` (`id`, `rqth`, `nom`, `prenom`, `adr_domicile`, `adr_ecole`, `adr_travail`, `mdp`) VALUES (NULL, '$rqth' , '$nom', '$prenom', '$adr_domicile', '$adr_ecole', '$adr_travail', '$mdp')";

        // $sql = "INSERT INTO data ((adr_domicile, adr_travail,
        //       adr_ecole, nom,prenom, rqth, mdp)
        //       VALUES (:adr_domicile, :adr_travail, :adr_ecole, :nom,
        //          :prenom, :rqth, :mdp))";

        //insertion dans la BDD
        try {
          $requete = $bdd->prepare($sql);
          $requete->execute();
          header("Location: login_user.php");
        } catch (Exception $e){
          print_r($bdd->errorInfo(),TRUE);
          var_dump($e->getMessage());
        }
        // $rs = $requete->fetchAll();
        //var_dump($rs);

    //fermer la bdd
    $bdd -> connexion = null;
 ?>
