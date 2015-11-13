<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Secret</title>
</head>
<body>
<p>
	<?php 
	if (isset($_POST['mdp']))
	{
		if ($_POST['mdp'] == "kangourou")
			echo "accès accordé !";
		else
			echo "mauvais mot de passe";
	}
		
	else
	{
		echo "pas de mot de passe saisi";
	}

	?>
</p>
</body>
</html>