<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
phpinfo();
$host = 'localhost';
$user = 'gpi2';
$pass = 'network';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "shit";
}
else{
    echo "cool";
} 
?>