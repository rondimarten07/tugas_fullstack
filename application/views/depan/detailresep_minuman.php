<div class="container">
    <div class="card">

        <head>
            <strong>
                Resep Minuman
            </strong>
        </head>
        <div class="card-body bg-warning">
            <?php foreach ($resep_minuman as $key) : ?>
                <?= $key['judul'] ?>
                <br />
                <?= $key['resep_minuman'] ?>

            <?php endforeach; ?>
        </div>
    </div>
</div>