

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="public/style/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div  class="centrer" id="container">
            <!-- zone de connexion -->
            
            <form action="./connexionWeb" method="POST">
                <h1 class="txt_connexion">Connexion</h1>
                <div class="txt_login">
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" id="username" required>
                    <br><br>
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>
                
                    <input type="submit" id='submit' value='LOGIN' >
                </div>
                <a href="views/inscription.php">S'inscrire</a>
       
            </form>
        </div>
    </body>
</html>
