<html>
    <head>
        <meta charset="utf-8"/>
        <title> RetourIndex </title>
    </head>
    <body>
        <?php 
        $login= $_POST['login'];
        $motDePasse=$_POST['motDePasse'];

        $host = 'mysql';

        // Database use name
        $user = 'root';
        
        //database user password
        $pass = 'hello';
        $db_name ='Test';

        $connexion = new mysqli($host, $user, $pass, $db_name );
	if ($connexion->connect_errno) {
		printf("´Echec de la connexion : %s %s",
			$connexion->connect_errno, $connexion->connect_error);
		exit();}
	$connexion->set_charset("utf8");
	$maRequete = "SELECT User, PWD, ID, Prenom FROM ID WHERE User LIKE '$login' AND PWD LIKE '$motDePasse';" ;
	$result = $connexion->query($maRequete);
	if(!$result) {
		echo "la requete ne s’est pas exécutée";} 
	else {
        echo "la requete s’est bien passée";
       
        $resultat = $result->fetch_assoc(); // ...
        $numeroUtilisateur = $resultat["numUtilisateur"];
        if($numeroUtilisateur==1){
            echo "<a href='menuAdministrateur.php'>cliquez ici</a><br>";
        }else{
            echo "<a href='listeConcours.php'>cliquez ici</a><br>";
        }
        session_start();
        $_SESSION['utilisateur']=$numeroUtilisateur;
		$result->free();}
        $connexion->close();
        
      ?>
      <br>

<?php echo "Retour PHP"; ?>
<br>
<br>
Identifiant: <?php echo $login; ?><br>
Mot de passe: <?php echo $motDePasse; ?><br>
ID:<?php echo $numeroUtilisateur; ?><br>
Requete:  <?php echo $maRequete;?><br>
    </body>
</html>