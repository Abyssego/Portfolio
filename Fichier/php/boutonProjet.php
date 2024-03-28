<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styleBoutonProjet.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
	<title>Mes projets</title>
</head>

<body>

	<?php include("../php/head.php"); ?>

	<div class="navigation">
		<div class="bordure">
			<div class="allButton">
				<?php 
				$host ="localhost";    //Nom de l'hote
				$bdd = "id19558919_portfolio";       //nom de la base de données
				$user = "id19558919_portfolioo";
				$password = "p~Ia|8jj1Dx|Y9bE";

				//On essaie de se connecter
				try {
					// Connexion à la base de données
					$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password);
					$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}
				// En cas d'erreur, on affiche un message et on arrête tout
				catch(PDOException $e) {
					echo "Erreur : " . $e->getMessage();
					exit();
				}

				$resultat = $cnn->prepare("SELECT idType, nomType FROM type");
				$resultat->execute();

				while ($row = $resultat->fetch())
				{ 
				?>
					<button id="button-85" role="button" onclick="redirectTo('projet.php?typeProject=<?php echo $row['idType']; ?>', '_self')" ><?php echo $row['nomType']; ?></button> <br />

				<?php
				}

				$resultat->closeCursor();
				$cnn = null;
				?>
			</div>
		</div>
	</div>
<script src="../js/scriptBoutonProjet.js"></script>
</body>
</html>