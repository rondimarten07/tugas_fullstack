<div class="container">
    <div class="card">

        <head>
            <strong>
                Resep Makanan
            </strong>
        </head>
        <div class="card-body bg-warning">
            <?php foreach ($resep_makanan as $key) : ?>
                <?= $key['judul'] ?>
                <br />
                <?= $key['resep_makanan'] ?>

            <?php endforeach; ?>
        </div>
    </div>
</div>