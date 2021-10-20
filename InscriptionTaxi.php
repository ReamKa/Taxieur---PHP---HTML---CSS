<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style_InscriptionTaxi.css" media="screen" type="text/css" />
        <script type="text/javascript" src="monscript.js"></script>
        <title>Inscription | Taxi</title>

    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification_chauffeur.php" method="POST">
                <h1>Inscription Taxi </h1>

                <label for="nom"><b>Nom<b></label>
                <input type="text" name="nom" required>

                <label for="prenom"><b>Prénom<b></label>
                <input id="prenom" type="text" name="prenom" required>

                <label for="num_agrement">Numéro d'Agrément</label>
                <input type="number" name="num_agrement" required> <br>

                <!--<label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" required>-->

                <input type="submit" id='submit' value='S&#8217;enregistrer' >

            </form>
        </div>
    </body>
</html>
