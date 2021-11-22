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


<html>
    <head>
        <meta charset="utf-8"/>
        <title> index </title>
    </head>
    <body><h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<body>
<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'root';

//database user password
$pass = 'hello';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "mysql";

try {
    $conn = new PDO("mysql:host=$servername;port=3306", $username, $password); 
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}*/
?>
</body>