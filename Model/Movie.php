<?php 
    
class Movie
{
    public $title;
    public $duration;
    public $genre;

    public function __construct($_title, $_duration, $_genre)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getGenre(){
        return $this->genre;
    }
}
?>