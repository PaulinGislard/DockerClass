<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mysql';
$user = 'root';
$pass = 'password';
$connexion = new mysqli($host, $user, $pass);
echo "cool"
if ($connexion->connect_errno) {
    printf("´Echec de la connexion : %s %s",
        $connexion->connect_errno, $connexion->connect_error);
    exit();}
echo "cool";
?>