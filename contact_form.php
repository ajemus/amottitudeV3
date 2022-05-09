<?php 
	include 'mdp.php';
	try {
		$bdd = new PDO($dsn,$username,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
	} catch (Exception $e) 
	{
		die('Erreur : ' . $e->getMessage());
	}   
?>
<?php
	$req = $bdd->prepare('INSERT INTO contact (nom, tel, mail, message) VALUES(?, ?, ?, ?)');
	$req->execute(array($_POST['nom'], $_POST['tel'], $_POST['mail'], $_POST['message']));

	$msg = "Nom : " . $_POST['nom'] . "\n";
	$msg .= "Mail : " . $_POST['mail'] . "\n";
	$msg .= "Téléphone : " . $_POST['tel'] . "\n";
	$msg .= "Message : " . $_POST['message'] . "\n ";
	mail($mail, "Contact Via site Web", $msg);
	header('Location:index.php#contactSection')
?>
