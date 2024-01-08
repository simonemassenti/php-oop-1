<?php
class Movie
{
    public $title;
    public $duration;
    public $year;
    public $director;

    function __construct($_title, $_duration, $_year, $_director)
    {
        $this->title = $_title;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function getInfo(){
        echo "<h1>".$this->title."</h1>";
        echo "<h3>".$this->duration."</h3>";
        echo "<h3>".$this->year."</h3>";
        echo "<h3>".$this->director."</h3>";
    }


}
