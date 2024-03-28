<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TimeLine</title>
  <link rel="stylesheet" type="text/css" href="../css/styleInformation.css">
  <link rel="icon" type="image/x-icon" href="../../image/photo2.png">
</head>
<body>
    
  <?php include("head.php"); ?>

    <div class="bordure">
      <h1>Parcours</h1>
      <p class="intro">Etudiant en informatique, je me spécialise dans le développement full-stack.</p>
      <div class="allButton">
        <div class="teste">
          <button id="button-85" type="button" onclick="displayUn()" role="button">Education</button>
          <button type="button" onclick="displayDeux()" id="button-85" role="button">Experience</button>
        </div>
      </div>


      <div id="timeline1" >
        <div class="timeline-container">

          <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>2022-Aujourd'hui</h3>
              <span>BTS Services Informatiques Aux Organisations (SIO) - Lycée Mathias Chalon-Sur-Saône</span>
              <p>Option SLAM (Solutions Logicielles et Applications Métiers)</p>
            </div>
          </div>

          <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>2019-2022</h3>
              <span>Baccalauréat général - Lycée polyvalent Niépce Balleure</span>
              <p>Obtention du baccalauréat général avec spécialités NSI (Numérique et Sciences Informatiques) et SI (Sciences de l'Ingénieur)</p>
            </div>
          </div>

          <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>2015-2019</h3>
              <span>Brevet Des Collèges - Collège Robert Doisneau</span>
              <p>Obtention du brevet des collèges avec mention</p>
            </div>
          </div>
        </div>
      </div>

      <div id="timeline2">
        <div class="timeline-container">


          <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>22 mai 2023 - 30 juin 2023</h3>
              <span>Stage première année BTS SIO</span>
              <p>Stage où j'ai eu l'opportunité de découvrir l'environnement de travail de développeur et de son équipe dans l'entreprise Ideal Solution. Pendant ce stage j'ai travaillé sur le fait d'ajouter une nouvelle fonctionnalité à Dolibarr qui est un cms open-source, et j'ai aussi fait la refonte du site de l'entreprise.</p>
            </div>
          </div>
          
          <div class="timeline-block timeline-block-right">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>juillet 2022 - mai 2023</h3>
              <span>Employé Polyvalent - Intermarché Chalon-Sur-Saône</span>
              <p>J'ai eu l'opportunité d'avoir un job étudiant chez Intermarché. 
              Je travaillais tous les dimanches matin et pendants les vacances scolaires ainsi que pendant Juillet et Août.
              Je faisait principalement de la caisse mais parfois aussi de la mise en rayon.</p>
            </div>
          </div>


          <div class="timeline-block timeline-block-left">
            <div class="marker"></div>
            <div class="timeline-content">
              <h3>décembre 2018</h3>
              <span>Stage Découverte - Graphimo St-Rémy</span>
              <p>Stage découverte que j'ai réaliser en 3ème. J'ai pu découvrir pour la première fois le monde professionnel,
              c'est à dire observer comment un professionnel s'organise et travail, pour répondre aux attentes du client.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="../js/scriptInformation.js"></script>
</body>
</html>