<?php
  /**
   * @author Laszlo Sajkiewicz
   */


   class Music{

       private $id;
       private $author;
       private $title;
       private $cover;
       private $mp3;
       private $category;

       function __construct($id, $author, $title, $cover, $mp3, $category) {
           $this->id = $id;
           $this->author = $author;
           $this->title = $title;
           $this->cover = $cover;
           $this->mp3 = $mp3;
           $this->category = $category;
       }

       public function __toString(){
           return    $this->getId() . " "
                   . $this->getAuthor() . " "
                   . $this->getTitle() . " "
                   . $this->getCover() . " "
                   . $this->getMp3() . " "
                   . $this->getCategory();
       }

       public function getId(){
           return $this->id;
       }

       public function getAuthor(){
           return $this->author;
       }

       public function getTitle(){
           return $this->title;
       }

       public function getCover(){
           return $this->cover;
       }

       public function getMp3(){
           return $this->mp3;
       }

       public function getCategory(){
           return $this->category;
       }
   }




?>
