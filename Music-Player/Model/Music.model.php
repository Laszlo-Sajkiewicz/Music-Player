<?php
  /**
   * @author Laszlo Sajkiewicz
   */
  class Music
  {
    public $imagePath;
    public $musicPath;

    function __construct($imagePath, $musicPath)
    {
      $this->imagePath = $imagePath;
      $this->musicPath = $musicPath;
    }
  }
?>
