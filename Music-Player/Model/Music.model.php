<?php
class Music
    {
     /**
      * [$imagePath path on your phisycal machine ]
      * @var [string]
      */
      public $imagePath;
     /**
      * [$musicPath path on your phisycal machine]
      * @var [string]
      */
      public $musicPath;
  
      function __construct($imagePath, $musicPath) {
 	$this->imagePath = $imagePath;
	$this->musicPath = $musicPath;
      }
    }
  ?>
