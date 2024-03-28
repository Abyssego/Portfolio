<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styleProjett.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
	<title>Mes projets</title>
</head>

<body>

	<?php include("../php/head.php"); ?>

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

	?>

	<div class="Base">
		<div class="bordure">
			<?php
				$resultat = $cnn -> prepare("SELECT nomProjet
				FROM projet
				WHERE idProjet = :idPro");

				$resultat->bindParam(':idPro', $_GET["project"], PDO::PARAM_STR);
				$resultat->execute();


				if ($row = $resultat -> fetch()) {
					?>
					<h1 class="titre"><?php echo $row['nomProjet']; ?></h1>
					<?php
				}
				$resultat->closeCursor();
			?>

			<div class="corp">
			    <div class="slideshow-container">
				<?php
					$compteImage = $cnn -> prepare("SELECT COUNT(imgProjet)
					FROM projet
					INNER JOIN description ON projet.idProjet = description.idProjet
					INNER JOIN descriptionimage ON description.idDescription = descriptionimage.idDescription
					INNER JOIN image ON descriptionimage.idImage = image.idImage
					WHERE projet.idProjet = :idPro");

					$compteImage->bindParam(':idPro', $_GET["project"], PDO::PARAM_STR);
					$compteImage->execute();

                    $totalNombreImage = 0;
					
					while ($rowImage = $compteImage -> fetch()) {
					    
                        $totalNombreImage = $rowImage['COUNT(imgProjet)'];
						
					}
					$compteImage->closeCursor();
					
					
				
				
				
					$resultat = $cnn -> prepare("SELECT imgProjet, nomImage
					FROM projet
					INNER JOIN description ON projet.idProjet = description.idProjet
					INNER JOIN descriptionimage ON description.idDescription = descriptionimage.idDescription
					INNER JOIN image ON descriptionimage.idImage = image.idImage
					WHERE projet.idProjet = :idPro");

					$resultat->bindParam(':idPro', $_GET["project"], PDO::PARAM_STR);
					$resultat->execute();

                    $compte = 0;
					
					while ($row = $resultat -> fetch()) {
					    $compte+=1;
						?>
                        

                          <div class="mySlides fade">
                            <div class="numbertext"><?php echo $compte;?> / <?php echo $totalNombreImage;?></div>
                            <img src="../image/<?php echo $row['imgProjet'] . "/" . $row['nomImage'];?>.jpg" style="width:100%">
                          </div>
						<?php
					}
					$resultat->closeCursor();
					?>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <!-- The dots/circles -->
                <div style="text-align:center">
                  <?php
                    for ($u = 1; $u <= $totalNombreImage; $u++) {
                        ?>
                        <span class="dot" onclick="currentSlide(<?php echo $u; ?>)"></span>
                        <?php
                    }
                    ?>
                </div>
                


				<?php
				$resultat = $cnn -> prepare("SELECT DISTINCT(nomType), nomProjet, dateDebDescription, dateFinDescription, butDescription, descDescription, tailleEquipe, nomType, lienGitDescription
					FROM type 
					INNER JOIN projet ON type.idType = projet.idType 
					INNER JOIN description ON projet.idProjet = description.idProjet
					INNER JOIN descriptionimage ON description.idDescription = descriptionimage.idDescription
					INNER JOIN image ON descriptionimage.idImage = image.idImage
					INNER JOIN equipe ON description.idEquipe = equipe.idEquipe
					WHERE projet.idProjet = :idPro");
				$resultat->bindParam(':idPro', $_GET["project"], PDO::PARAM_STR);
				$resultat->execute();
				while ($row = $resultat -> fetch()) {
					?>
			
					<p><span id="sousTitre">Projet : </span><br><span id="sousPartie"><?php echo $row['nomProjet']; ?></span></p>

					<p><span id="sousTitre">Travail fait en tant que projet : </span><br><span id="sousPartie"><?php echo $row['nomType']; ?></span></p>

					<?php
						if ($row['tailleEquipe'] == "Seul") { ?>
							<p><span id="sousTitre">Fait : </span><br><span id="sousPartie"><?php echo $row['tailleEquipe']; ?></span></p> <?php
						} else{ ?>
							<p><span id="sousTitre">Fait en équipe de : </span><br><span id="sousPartie"><?php echo $row['tailleEquipe']; ?></span></p> <?php
						}
					?>

					<p><span id="sousTitre">Date du début : </span><br><span id="sousPartie"><?php echo $row['dateDebDescription']; ?></span></p>
					<p><span id="sousTitre">Date de fin : </span><br><span id="sousPartie"><?php echo $row['dateFinDescription']; ?></span></p>
					<p><span id="sousTitre">But du projet : </span><br><span id="sousPartie"><?php echo $row['butDescription']; ?></span></p>
					<p><span id="sousTitre">Description : </span><br><span id="sousPartie"><?php echo $row['descDescription']; ?></span></p>

					
					<?php
				}
				

				$resultat->closeCursor();
				$cnn=null;
				?>


			</div>
		</div>
	</div>

<script src="../js/scriptProjett.js"></script>
</body>
</html>