<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styleProjet.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
	<title>Mes projets</title>
</head>

<body>

	<?php include("../php/head.php"); ?>

	<div class="Base">
		<div class="bordure">
			
			<div class="corp">
			    
			    <h1 class="titre">Mes Projets</h1>

			<?php 
			$host ="localhost";    //Nom de l'hote
			$bdd = "id19558919_portfolio";       //nom de la base de données
			$user = "id19558919_portfolioo";
			$password = "p~Ia|8jj1Dx|Y9bE";

			//On essaie de se connecter
			try {    //Connexion à la base et au serveur
				$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			}
			// En cas d'erreur, on affiche un message et arrete tout
			catch(PDOExeption $e) {
				echo "Erreur : " . $e->getMessage();
			}


			$resultat = $cnn -> prepare("SELECT nomType, idProjet, nomProjet, descProjet FROM type INNER JOIN projet ON type.idType = projet.idType WHERE type.idType = :idTypeProject");
			$resultat->bindParam(':idTypeProject', $_GET["typeProject"], PDO::PARAM_INT);
			$resultat->execute();
            
            
			while ($row = $resultat -> fetch())
			{ ?>

				
				
				<div id="allDiv">
				  <div class="example-2 card" id="photo3">
				    <div class="wrapper">
				      <div class="data">
				        <div class="content">
				          <span class="type"><?php echo $row['nomType']; ?></span>
				          <h1 class="title"><a href="projett.php?project=<?php echo $row['idProjet']; ?>"><?php echo $row['nomProjet']; ?></a></h1>
				          <p class="text"><?php echo $row['descProjet']; ?>
				          </p>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>


			<?php
		}


		$resultat->closeCursor();
		$cnn=null;
	?>



			</div>
		</div>
	</div>

<script src="../js/scriptProjet.js"></script>
</body>
</html>