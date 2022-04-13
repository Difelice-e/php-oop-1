<?php 

class movie {
    public $poster;
    public $title;
    public $language;
    public $mainActor;
    public $releaseDate;

    function __construct(string $_poster, string $_title, string $_language, string $_mainActor, string $_releaseDate){
      $this->poster = $_poster;
      $this->title = $_title;
      $this->language = $_language;
      $this->mainActor = $_mainActor;
      $this->releaseDate = $_releaseDate;
    }

    public function yearsFromRelease() {
      return (2022 - $this->releaseDate); 
    }
}

?>