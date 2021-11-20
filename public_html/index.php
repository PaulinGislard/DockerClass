<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
/*$host = 'localhost:3306';
$user = 'root';
$pass = 'password';
$connexion = new mysqli($host, $user, $pass);

if ($connexion->connect_errno) {
    printf("´Echec de la connexion : %s %s",
        $connexion->connect_errno, $connexion->connect_error);
    exit();}
echo "cool";*/
$db = new PDO('mysql:host=mysql;port=3306;dbname=testapp', 'root', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
var_dump($db->query('SELECT * from users'));
?>