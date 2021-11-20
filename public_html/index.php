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
$host = 'db';

// Database use name
$user = 'network';

//database user password
$pass = 'root';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully!";
}
?>
</body>