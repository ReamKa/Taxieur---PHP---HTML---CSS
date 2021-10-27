<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <script type="text/javascript" src="monscript.js"></script>
    <title>Login | Taxi</title>

</head>

<body>    
    <div id="container">
        <!-- zone de connexion -->

        <form action="verification_chauffeur.php" method="POST">
            <h1>Connexion</h1>


            <input id="num_agrement" type="text" placeholder="N° Agrement" name="num_agrement" required>


            <input id="mdp" type="password" placeholder="Entrer le mot de passe" name="mdp" required>

            <input type="submit" id='submit' value='LOGIN'>
            <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
    </div>
</body>

</html>