<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style_Inscription.css" media="screen" type="text/css" />
        <script type="text/javascript" src="monscript.js"></script>
        <title>Inscription | Client</title>

    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="insert_bdd_h.php" method="POST">
                <h1>Inscription Client </h1>

                <label for="rqth"><b>Numéro RQTH<b></label>
                <input id = "rqth" type="number" name="rqth" required>

                <label for="Nom"><b>Nom<b></label>
                <input id = "nom" type="text" name="nom" required>

                <label for="prenom"><b>Prénom<b></label>
                <input id="prenom" type="text" name="prenom" required>

                <label for="mdp"><b>Mot de passe<b></label>
                <input id = "mdp "type="password" name="mdp" required>

                <label for="AdresseDom"><b>Adresse du domicile<b></label>
                <input id = "adr_domicile "type="text" name="adr_domicile" required>

                <label for="AdresseEcole"><b>Adresse du lieu d'étude<b></label>
                <input id = "adr_ecole" type="text" name="adr_ecole" required>

                <label for="AdresseTravail"><b>Adresse du lieu de travail<b></label>
                <input id ="adr_travail" type="text" name="adr_travail" required>

                <input type="submit" id='submit' value='S&#8217;inscrire' >

            </form>
        </div>
    </body>
</html>
