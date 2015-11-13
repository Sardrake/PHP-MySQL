<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Mot de passe</title>
</head>
<body>
<?php
if (!isset($_POST['mdp']))
{
	?>
	<h1> Authentification</h1>
  <form action="tp.php" method="post">
  <p>
	<label>Mot de passe</label> : <input type="password" name="mdp" />
	<input type="submit" value="Valider" />
  </p>
  </form>
<?php

}
	elseif ($_POST['mdp'] != "kangourou")
	{
		echo "mauvais mot de passe";
	}
else
{
	echo "accès accordé";
}
?>

</body>
</html>