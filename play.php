<html lang="fr">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="jukebox.css" media="screen" title="no title" charset="utf-8">
</head>
    <body>
          <h1>MUSIC PLAYER</h1>
<?php

$img =$_GET['img'];
          echo "  <img src='jukebox/".$img.".jpeg' size='200'/>";


          echo "<audio controls='' autoplay='' src='jukebox/".$img.".mp3' type='audio/mpeg'>
                </audio>";

 ?>
  </body>
</html>
