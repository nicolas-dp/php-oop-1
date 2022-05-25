<?php

include __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php'; ?>

<div class="container">
    <?php foreach ($movies as $movie) : ?>
        <div class="card">
            <img class="img-fluid" src="<?= $movie->poster_path ?>" alt="<?= $movie -> title ?>">
            <div class="card-body">
                <h4><?= $movie -> title; ?> </h4>
                <p><?= $movie -> overview; ?> </p>
            </div>
            <?php endforeach; ?>
        </div>
</div>


<?php include __DIR__ . '/layout/footer.php' ?>



