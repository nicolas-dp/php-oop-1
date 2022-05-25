<?php

include __DIR__ . '/db.php';
include __DIR__ . '/layout/head.php'; ?>

<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 justify-content-center g-4">
    <?php foreach ($movies as $movie) : ?>
        <div class="col p-3">
            <img class="img-fluid" src="<?= $movie->poster_path ?>" alt="<?= $movie->title ?>">
            <div class="card-body">
                <h4><?= $movie->title; ?> </h4>
                <p><?= $movie->overview; ?> </p>
                <span>Voto: <?= $vote; ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php include __DIR__ . '/layout/footer.php' ?>