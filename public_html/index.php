<html>
    <head>
        <meta charset="utf-8"/>
        <title> index </title>
    </head>
    <body><h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<body>
<?php
printf("coucou");
$host = 'mysql';
$user = 'root';
$pass = 'password';
$connexion = new mysqli($host, $user, $pass);

if ($connexion->connect_errno) {
    printf("´Echec de la connexion : %s %s",
        $connexion->connect_errno, $connexion->connect_error);
    exit();}
echo "cool";
?>
</body>