<?php
class Movie
{
    public $id;
    public $original_language;
    public $overview;
    public $poster_path;
    public $title;

    function __construct(Int $id, String $original_language, String $overview, String $poster_path, String $title)
    {
        $this->id = $id;
        $this->original_language = $original_language;
        $this->overview = $overview;
        $this->poster_path = $poster_path;
        $this->title = $title;
    }


}



$movies = [

new Movie(1, "en", "The characters we met a little more than a decade ago return to East Great Falls for their high-school reunion. In one long-overdue weekend, they will discover what has changed, who hasn’t and that time and distance can’t break the bonds of friendship.", "https://image.tmdb.org/t/p/w342/de5QBIdVR4dnkBZ4a0zjkS4lTg.jpg", "American Reunion"),

new Movie(2, "en", "Erik, Ryan, and Cooze start college and pledge the Beta House fraternity, presided over by none other than legendary Dwight Stifler. But chaos ensues when a fraternity of geeks threatens to stop the debauchery and the Betas have to make a stand for their right to party.", "https://image.tmdb.org/t/p/w342/cEJMqmCGdKJkmjWwi3Iv6l4kMIK.jpg", "American Pie Presents: Beta House")

];

//var_dump($movies);
