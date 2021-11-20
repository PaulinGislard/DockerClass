<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
phpinfo();
$host = 'localhost';
$user = 'gpi2';
$pass = 'network';
$connexion = new mysqli($host, $user, $pass);

if ($connexion->connect_errno) {
    printf("´Echec de la connexion : %s %s",
        $connexion->connect_errno, $connexion->connect_error);
    exit();}
echo "cool";
?>