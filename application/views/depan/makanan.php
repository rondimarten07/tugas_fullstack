<div class="container">
    <div class="card">

        <head>
            <strong>
                Resep Makanan
            </strong>
        </head>
        <div class="">
        </div>
        <div class="card-body bg-warning">
            <?php foreach ($resep_makanan as $resep_makanan) : ?>
                <li class="list-group-item"><a href="welcome/detailresep/<?= $resep_makanan['id'] ?>" id="<?= $resep_makanan['id'] ?>"><?= $resep_makanan['judul']; ?></a>
                    <!-- <a href="welcome/hapusresep_makanan/<?= $resep_makanan['id'] ?>" onclick="return confirm('yakin?')">Hapus</a>
                    <a href="welcome/ubahresep_makanan/<?= $resep_makanan['id'] ?>" onclick="return confirm('yakin?')">Ubah</a> -->

                </li>
            <?php endforeach; ?>
        </div>
    </div>
</div>