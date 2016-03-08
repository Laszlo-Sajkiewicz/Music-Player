<?php
   require_once 'Model/Scanner.model.php';
 
   $tab = array();
   $directory = 'Data/';
 
   $scanner = new Scanner($directory);
 
   $tab['listMusic'] = $scanner->scanAll();
 
   include_once 'View/music.view.php';

 ?>
