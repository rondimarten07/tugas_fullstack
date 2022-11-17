<div class="container">
    <div class="row mt-3">
        <?php foreach ($resep_makanan as $resep_makanan) : ?>
            <form action="<?php echo site_url('ubahmakanan') ?>" method="post">
                <input type="hidden" name="id" value="<?= $resep_makanan['id'] ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <Input type="text" name="judul" class="form-control" id="judul" required placeholder="<?= $resep_makanan['judul']; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <Input type="text" name="deskripsi" class="form-control" id="deskripsi" required placeholder="<?= $resep_makanan['resep_makanan']; ?>">
                </div>
                <button type="submit" name="ubahresep" class="btn btn-primary float-right">Ubah Resep</button>
            </form>
        <?php endforeach; ?>
    </div>
</div>