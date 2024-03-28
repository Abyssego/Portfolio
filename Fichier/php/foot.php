<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styleFoot.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
</head>
<body>

	<div class="footer">
		<div id="case-One">
			<div id="partie-One-One">
				<p id="titre">Statistique du forum</p>
			</div>

			<div id="partie-One-Two"> 
				<div id="partie-One-Two-One">
					<p>		

						<?php   //Scipt pour afficher le nombre total d'ariticle
							$host ="localhost";    //Nom de l'hote
							$bdd = "forum";       //nom de la base de données
							$user = "root";
							$password = "root";

							//On essaie de se connecter
							try {    //Connexion à la base et au serveur
								$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
							}
							// En cas d'erreur, on affiche un message et arrete tout
							catch(PDOExeption $e) {
								echo "Erreur : " . $e->getMessage();
							}

							$resultat = $cnn -> prepare("SELECT COUNT(idArt) FROM article");
							$resultat->execute();

							while ($row = $resultat -> fetch())
							{ ?>
								
								<span><?php echo $row['COUNT(idArt)'] .  '<br/>'; ?></span><br>
							
								
								<?php
							}
							$resultat->closeCursor();
							$cnn=null;
						?>

						
						<span>Total des articles</span>
					</p>
				</div>
				<div id="partie-One-Two-Two">
					<p>

					<?php   //Scipt pour afficher le nombre total de message
							$host ="localhost";    //Nom de l'hote
							$bdd = "forum";       //nom de la base de données
							$user = "root";
							$password = "root";

							//On essaie de se connecter
							try {    //Connexion à la base et au serveur
								$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
							}
							// En cas d'erreur, on affiche un message et arrete tout
							catch(PDOExeption $e) {
								echo "Erreur : " . $e->getMessage();
							}

							$resultat = $cnn -> prepare("SELECT COUNT(idRep) FROM reponse");
							$resultat->execute();

							while ($row = $resultat -> fetch())
							{ ?>
								
								<span><?php echo $row['COUNT(idRep)'] .  '<br/>'; ?></span><br>
							
								
								<?php
							}
							$resultat->closeCursor();
							$cnn=null;
						?>
						
						<span>Total des messages</span>
					</p>
				</div>
			</div>
		</div>



		<div id="case-Two">
			<div id="partie-Two-One">
				<p id="titre">Statistique des membres</p>
			</div>

			<div id="partie-Two-Two"> 
				<div id="partie-Two-Two-One">
					<p>
					<?php   //Scipt pour afficher le nombre total de message
							$host ="localhost";    //Nom de l'hote
							$bdd = "forum";       //nom de la base de données
							$user = "root";
							$password = "root";

							//On essaie de se connecter
							try {    //Connexion à la base et au serveur
								$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
							}
							// En cas d'erreur, on affiche un message et arrete tout
							catch(PDOExeption $e) {
								echo "Erreur : " . $e->getMessage();
							}

							$resultat = $cnn -> prepare("SELECT COUNT(idMemb) FROM membre");
							$resultat->execute();

							while ($row = $resultat -> fetch())
							{ ?>
								
								<span><?php echo $row['COUNT(idMemb)'] .  '<br/>'; ?></span><br>
							
								
								<?php
							}
							$resultat->closeCursor();
							$cnn=null;
						?>
						<span>Total des membres</span>
					</p>
				</div>
				<div id="partie-Two-Two-Two">
					<img src="../image/imageProfile.png" id="imageProfile">
						<p id="partie-Two-Two-Two-One">
							<span>Le membre le plus récent, est :</span>

							<?php   //Scipt pour afficher le nombre total de message
								$host ="localhost";    //Nom de l'hote
								$bdd = "forum";       //nom de la base de données
								$user = "root";
								$password = "root";

								//On essaie de se connecter
								try {    //Connexion à la base et au serveur
									$cnn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
								}
								// En cas d'erreur, on affiche un message et arrete tout
								catch(PDOExeption $e) {
									echo "Erreur : " . $e->getMessage();
								}

								$resultat = $cnn -> prepare("SELECT nomMemb, dateIns FROM membre ORDER BY dateIns DESC LIMIT 1;");
								$resultat->execute();

								while ($row = $resultat -> fetch())
								{ ?>
									
									<span><?php echo $row['nomMemb']; ?></span><br>
									<span>Membre depuis : <?php echo $row['dateIns'] . '<br/>'; ?> </span>
									

									
									<?php
								}
								$resultat->closeCursor();
								$cnn=null;
								
							?>
						
							
					</p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>