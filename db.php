<?php

include __DIR__ . '/Models/Movies.php';

$movies = [

    new Movie(1, "en", "They will discover what has changed, who hasn’t and that time and distance can’t break the bonds of friendship.", "https://image.tmdb.org/t/p/w342/de5QBIdVR4dnkBZ4a0zjkS4lTg.jpg", 'American Reunion'),
    new Movie(2, "en", "Erik, Ryan, and Cooze start college and pledge the Beta House fraternity, presided over by none other than legendary Dwight Stifler. But chaos ensues when a fraternity of geeks threatens to stop the debauchery and the Betas have to make a stand for their right to party.", "https://image.tmdb.org/t/p/w342/cEJMqmCGdKJkmjWwi3Iv6l4kMIK.jpg", "American Pie Presents: Beta House")
    
]; 

$movie_1 = new Movie(1, "en", "They will discover what has changed, who hasn’t and that time and distance can’t break the bonds of friendship.", "https://image.tmdb.org/t/p/w342/de5QBIdVR4dnkBZ4a0zjkS4lTg.jpg", 'American Reunion');
$movie_2 = new Movie(2, "en", "Erik, Ryan, and Cooze start college and pledge the Beta House fraternity, presided over by none other than legendary Dwight Stifler. But chaos ensues when a fraternity of geeks threatens to stop the debauchery and the Betas have to make a stand for their right to party.", "https://image.tmdb.org/t/p/w342/cEJMqmCGdKJkmjWwi3Iv6l4kMIK.jpg", "American Pie Presents: Beta House");

//var_dump($movie_1, $movie_2);

$vote = $movie_1->incraseVote($vote);

//var_dump($vote);