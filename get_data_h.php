<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <!--<link rel="stylesheet" href="style.css" media="screen" type="text/css" />-->
        <script type="text/javascript" src="monscript.js"></script>
        <title>Vos Données</title>

    </head>
<body>
<?php


    // connexion à la base de données
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
?>
    <table border="4" align="center">
    <h1>Une demande de chauffeur a été envoyée avec ces renseignements. Veuillez attendre qu'un chauffeur accepte la course.</h1>
<tr>
<label for="rqth"><b><td>RQTH</td><b></label>
<label for="nom"><b><td>Nom</td><b></label>
<label for="prenom"><b><td>Prenom</td><b></label>
<label for="adr_domicile"><b><td>Domicile</td><b></label>
<label for="adr_ecole"><b><td>Ecole</td><b></label>
<label for="adr_travail"><b><td>Travail</td><b></label>

</tr>

<?php
      $sql = "SELECT * FROM data ORDER BY id DESC LIMIT 1";
      $requete = $bdd->prepare($sql);
      if($requete->execute()){
        if($requete->rowCount() >= 1){
                $row = $requete->fetch();
                echo "<tr><td>" . $row['rqth'] . "</td>";
                echo "<td>".$row['nom']."</td>";
                echo "<td>".$row['prenom']."</td>";
                echo "<td>".$row['adr_domicile']."</td>";
                echo "<td>".$row['adr_travail']."</td>";
                echo "<td>".$row['adr_ecole']."</td></tr>";
            }
        }
?>
</table>
</body>
</html>