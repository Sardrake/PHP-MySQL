<?php
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','');
	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
	$req->execute(array('pseudo' => $_POST['pseudo'], 'message' => $_POST['message']));
// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');
?>