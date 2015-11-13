
<!DOCTYPE=HTML>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>MiniChat</title>
</head>

<style>
    form
    {
        text-align:center;
    }
    </style>
	
<body>
	<form action="minichat_post.php" method="post">
	<p>
		<label>Pseudo</label> : <input type="text" name="pseudo" /> <br />
		<label>Message</label> : <input type="text" name="message" /> <br />
		<input type="submit" value="Envoyer" />
	</p>
	</form>

<p>
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','');
	$chat = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0,10');
	while ($messages = $chat->fetch())
	{ 
		echo htmlspecialchars($messages['pseudo']) . ' ' . htmlspecialchars($messages['message']) . '<br />';
	}
?>
</body>
</html>
