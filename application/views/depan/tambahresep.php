<div class="container">
    <div class="row mt-3">
        <form action="<?php echo site_url('postresep') ?>" method="post">
            <select class="form-select" name="jenis_resep" id="jenis_resep">
                <option selected>Resep apakah ini?</option>
                <option value="resep">Resep Makanan</option>
                <option value="resep_minuman">Resep Minuman</option>
            </select>
            <div class="form-group">
                <label for="judul">Judul</label>
                <Input type="text" name="judul" class="form-control" id="judul" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <Input type="text" name="deskripsi" class="form-control" id="deskripsi" required>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Resep</button>
        </form>
        <div>
        </div>
    </div>
</div>