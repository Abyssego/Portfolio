<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="../css/styleContact.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
</head>
<body>

	<?php include("../php/head.php"); ?>
	
	<div id="bordure">
		<h1>Contact</h1>

		<div class="part1">
			<div class="part11">
				<form method="post">
					<p>			
						<input type="text" name="nom" id="normal" placeholder="Nom" size="30" maxlength="10" />   <!--maxlength pour limiter le nombre de caractere !-->
						<br />
						<input type="email" name="email" id="normal" placeholder="Email" size="30" maxlength="100" required/>
						<br />
						<input type="text" name="objet" id="normal" placeholder="Objet" size="30" maxlength="10" />
						<br />
						<textarea name="message" id="message" placeholder="Message" size="30" maxlength="244" rows="12" cols="35"></textarea>
						<br />
						<input id="button2" type="submit" name ="btnenvoyer" value="Envoyer" />					
					</p>		
			    </form>
		    </div>
	    </div>



    </div>

    <?php 
    // Si le formulaire à été soumis

    if ($_POST["message"]) {
	    $retour = mail("abyssego4@gmail.com", $_POST["objet"], $_POST["message"], "");
	    if ($retour){
	        echo "<p> L'email a bien été envoyé.</p>";
	    }    	
    }


    ?>



</body>
</html>