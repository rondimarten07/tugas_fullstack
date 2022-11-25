<div class="container">
    <?php foreach ($produk as $produk) : ?>
        <div class="row" style="margin-top:40px;">

            <div class="col-md-6 text-center" style="max-width:100%; font-size:24px;">
                <img src="<?php echo base_url('assets/tjc/img/produk/' . $produk['foto']) ?>" alt="">
                <br />
                <br />
                <strong><?= $produk['nama'] ?></strong>
            </div>

            <div class="col-md-6" style="font-size:18px">
                <?= $produk['keterangan'] ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>