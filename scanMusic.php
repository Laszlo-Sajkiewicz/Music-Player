<html lang="fr">
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css"  href="jukebox.css">
</head>
<?php

function scanMusic($dir)
{
 $dir ='/users/info/etu-s3/sajkiewl/public_html/web/tp1';
 $file =  scandir($dir);
 $music = glob('/users/info/etu-s3/sajkiewl/public_html/web/tp1/*.{mp3}', GLOB_BRACE);
 $image = glob('/users/info/etu-s3/sajkiewl/public_html/web/tp1/*.{jpeg}',GLOB_BRACE);


    foreach ($image as $key => $value) {
      # code...

      $replace_image = substr_replace($value, '/~', 0, 19);
      $replace_image2 = substr_replace($replace_image,'', 10 , 12);

      echo '<img src="http://www-etu-info.iut2.upmf-grenoble.fr'.$replace_image2.'" width="100" height="100" />';
    }
foreach ($music as $key1 => $value1) {
      $replace_music = substr_replace($value1, '/~', 0, 19);
      $replace_music2 = substr_replace($replace_music,'', 10 , 12);
      $path = $replace_music2;
      $file = basename($path, ".mp3");
      var_dump($file);
      echo "<embed src='".$file.".mp3' t align='absmiddle' alt='D.A.N.C.E.mp3' autostart='false' border='0' controls='smallconsole'></embed>";
    }



function findMusic($s_dir){
    $a_fichier = array();
    $i_i = 0;
    if (is_dir($s_dir)){
        if($dir_handle = opendir($s_dir)) {
            while (false !== ($s_entry = readdir($dir_handle))) {
                if ($s_entry[0] != '.') {
                    $a_fichier[$i_i] = $s_entry;
                    $a_f = findMusic($s_dir . '/' . $s_entry);
                    if (sizeof($a_f) != 0){
                        foreach ($a_f as $key => $value) {
                            $i_i++;
                            $a_fichier[$i_i] = $value;
                        }
                    }
                    $i_i++;
                }
            }
            closedir($dir_handle);
        }
    }
    return $a_fichier;
}


}
scanMusic("./data");
findMusic("./data"); ?>
<body>

</body>
</html>
