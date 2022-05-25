<?php
class Movie
{
    public $id;
    public $original_language;
    public $overview;
    public $poster_path;
    public $title;
    public $vote;

    function __construct(Int $id, String $original_language, String $overview, String $poster_path, String $title, int $vote = 0)
    {
        $this->id = $id;
        $this->original_language = $original_language;
        $this->overview = $overview;
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->vote = $vote;
    }

    public function incraseVote($vote){
       if ($vote == 0) {
         return $this ->$vote = rand(1,10);
       }
    }
    
}


/* $c -> setName("The characters we met a little more than a decade ago return to East Great Falls for their high-school reunion. In one long-overdue weekend, they will discover what has changed, who hasn’t and that time and distance can’t break the bonds of friendship.");
var_dump($c); */




//var_dump($movies);
