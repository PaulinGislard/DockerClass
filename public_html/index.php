<html>
    <head>
        <meta charset="utf-8"/>
        <title>index</title>
    </head>
    <body>
      <h1>Bienvenue  à vous</h1>
      <form action="retourIndex.php" method="post">
      <label>Identifiant : <input type="text" name="login" required></label>
      <label>Mot de passe : <input type="password" name="motDePasse" required> </label>
      </br>
      <input type="submit" Value="Connexion"/>  
      </form>
      <style type="text/css">
        input:invalid {
        border: 2px dashed red;
        }

        input:valid {
        border: 1px solid black;
        }
        body {
        text-align: center;
        }
        h1{
            font-size: 23px;

        }
        </style>
      
     
    </body>
</html>


