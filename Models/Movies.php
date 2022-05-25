<?php


/* 
"id": 1,
"original_language": "en",
"original_title": "American Reunion",
"overview": "The characters we met a little more than a decade ago return to East Great Falls for their high-school reunion. In one long-overdue weekend, they will discover what has changed, who hasn’t, and that time and distance can’t break the bonds of friendship.",
"poster_path": "/de5QBIdVR4dnkBZ4a0zjkS4lTg.jpg",
"title": "American Reunion",
*/



class Movie
{
    public $id;
    public $original_language;
    public $overview;
    public $poster_path;
    public $title;

    function __construct($id, $original_language, $overview, $poster_path, $title)
    {
        $this->id = $id;
        $this->original_language = $original_language;
        $this->overview = $overview;
        $this->poster_path = $poster_path;
        $this->title = $title;
    }
}
