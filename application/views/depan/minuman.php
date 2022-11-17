<div class="container">
    <div class="card">

        <head>
            <strong>
                Resep Minuman
            </strong>
        </head>
        <div class="">
            <a href="<?php echo site_url('tambahresep') ?>">Tambah Resep</a>
        </div>
        <div class="card-body bg-warning">
            <?php foreach ($resep_minuman as $resep_minuman) : ?>
                <li class="list-group-item"><a href="welcome/detailresep_minuman/<?= $resep_minuman['id'] ?>" id="<?= $resep_minuman['id'] ?>"><?= $resep_minuman['judul']; ?></a>
                    <a href="welcome/hapusresep_minuman/<?= $resep_minuman['id'] ?>" onclick="return confirm('yakin?')">Hapus</a>
                    <a href="welcome/ubahresep_minuman/<?= $resep_minuman['id'] ?>" onclick="return confirm('yakin?')">Ubah</a>
                </li>
            <?php endforeach; ?>
        </div>
    </div>
</div>