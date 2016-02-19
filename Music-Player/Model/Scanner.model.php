<?php
  include_once 'Model/Music.model.php';

  /**
   * @author Laszlo Sajkiewicz
   */
  class Scanner
  {
    public $directory;

    function __construct($directory)
    {
      $this->directory = $directory;
    }

    function scanMusic() {
      return glob('' . $this->directory . '*.{mp3}', GLOB_BRACE);
    }

    function scanAll() {
      $tab = array();
      foreach ($this->scanMusic() as $key => $value) {
        $tab[] = new Music($this->directory . basename($value, ".mp3").'.jpeg',
                           $this->directory . basename($value, ".mp3").'.mp3');
      }
      return $tab;
    }
  }
?>
