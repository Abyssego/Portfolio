<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styleIndex.css">
	<link rel="icon" type="image/x-icon" href="../image/photo2.png">
	<title>Accueil</title>
</head>

<body>

	<div class="head">
		<ul>
			<li><a  class="nav">Navigation</a></li>
			<li><a href="php/contact.php" id="reste">Contact</a></li>
		    <li><a href="php/information.php" id="reste">A propos</a></li>
		    <li><a href="php/veille.php" id="reste">Veille Technologique</a></li>
		    <li><a href="php/boutonProjet.php" id="reste">Projets</a></li>
		    <li><a href="index.php" id="reste">Accueil</a></li>
		</ul>	
	</div>

	<div class="Base">

		<div class="bordure">
			<div class="titre">
					<h1>Portfolio</h1>
			</div>
			<div class="corp">
				<div class="teste">
			
					<div>
						<p><img class="logo"src="image/photo2.png"></p>
					</div>
					<div>
						<h2 class="nom">Massié Loan</h2>
					</div>

					<div class="description">
						<p>Etudiant/Aspirant <br/> Développeur Back-End</p>
					</div>

					<div class="toutBouton">
						<button id="glow-on-hover" type="button" onclick="redirectTo('php/download.php', '_self')">CV</a></button>
						<button id="glow-on-hover" type="button" onclick="redirectTo('php/contact.php', '_self')">Contact</a></button>
					</div>
				</div>

				<div class="presentation">
					<dic class="allPresentation">
						<h2 class="titrePresentation">Je me présente :</h2>
						<p id="textePresentation">Je m'apelle Loan, j'ai 19 ans, je suis en étude de BTS SIO, en première année spécialité SLAM, aspirant devenir développeur back-end, je cherche actuellement une alternance dans le développement web, aime codé, mais n'aime pas les bugs. :)</p>
						<p id="textePresentation">Comme hobit j'aime les manga/manhwa/manhua et j'ai commencé à m'interressé aux light-novels, mais aussi bien sûr comme tous le monde, j'aime aussi les jeux vidéo, particulièrement les open-world, et jeux à choix. 
						</p>
					</div>
				</div>		
			</div>
		</div>
	</div>


<script src="scriptIndex.js"></script>
</body>
</html>