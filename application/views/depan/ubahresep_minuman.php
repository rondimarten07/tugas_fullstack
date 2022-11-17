<div class="container">
    <div class="row mt-3">
        <?php foreach ($resep_minuman as $resep_minuman) : ?>
            <form action="<?php echo site_url('ubahminuman') ?>" method="post">
                <input type="hidden" name="id" value="<?= $resep_minuman['id'] ?>">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <Input type="text" name="judul" class="form-control" id="judul" required placeholder="<?= $resep_minuman['judul']; ?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <Input type="text" name="deskripsi" class="form-control" id="deskripsi" required placeholder="<?= $resep_minuman['resep_minuman']; ?>">
                </div>
                <button type="submit" name="ubahresep" class="btn btn-primary float-right">Ubah Resep</button>
            </form>
        <?php endforeach; ?>
    </div>
</div>