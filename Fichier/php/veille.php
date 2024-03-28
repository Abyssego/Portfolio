<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../../image/photo2.png">
  <title>Veille</title>
  <link rel="stylesheet" type="text/css" href="../css/styleVeille.css">
</head>
<body>
    
  <?php include("head.php"); ?>
	

	<div class="bordure">
	    <div>
        <?php 
        $apiKey = "AIzaSyCvlqk_kom90AuZpYTMTpq6B9EE_zhpIeo";
        
        $channelId = "UC0yaN6lChea3u8DECeD8i4A"; // L'identifiant de la chaîne dont vous voulez récupérer les vidéos
        $maxResults = "12"; // Nombre maximal de vidéos à récupérer
        
    
        
        $apiUrl = "https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=$channelId&maxResults=$maxResults&order=date&key=$apiKey";
        
        
        
        $response = file_get_contents($apiUrl);
        
             
        
        $data = json_decode($response);
        //var_dump($data);
        
        // Traitez les données JSON pour obtenir les informations des vidéos
        
        // Exemple d'affichage des titres des vidéos
        foreach ($data->items as $item) {
            $videoId = $item->id->videoId;
            $videoTitle = $item->snippet->title;
            $videoThumbnail = $item->snippet->thumbnails->default->url;
            
            //echo "Vidéo : $videoTitle\n";
            //echo "ID : $videoId\n";
            echo "<iframe id='video' width='300' height='480' src='https://www.youtube.com/embed/$videoId' frameborder='0' allowfullscreen></iframe>";
        }
    
        ?>
        </div>
    </div>

<script src="scriptVeille.js"></script>
</body>
</html>