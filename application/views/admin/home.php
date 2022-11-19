<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">BARANG</div>
            <a href="<?php echo site_url('admin/produk/jenis/barang') ?>">
                <div class="panel-body text-center"><i class="fa fa-shopping-cart fa-4x"></i><span class="badge">
                        <?php echo $jml_produk ?>
                    </span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/produk/jenis/barang') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">LAYANAN &amp; JASA</div>
            <a href="<?php echo site_url('admin/produk/jenis/jasa') ?>">
                <div class="panel-body text-center"><i class="fa fa-wrench fa-4x"></i><span class="badge">
                        <?php echo $jml_jasa ?>
                    </span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/produk/jenis/jasa') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">PROMO</div>
            <a href="<?php echo site_url('admin/produk/jenis/promo') ?>">
                <div class="panel-body text-center"><i class="fa fa-tags fa-4x"></i><span class="badge">
                        <?php echo $jml_promo ?>
                    </span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/produk/jenis/promo') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">PAKET</div>
            <a href="<?php echo site_url('admin/produk/jenis/paket') ?>">
                <div class="panel-body text-center"><i class="fa fa-cubes fa-4x"></i><span class="badge">
                        <?php echo $jml_paket ?>
                    </span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/produk/jenis/paket') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>



</div>
<br>

<div class="row">
    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">USER/ADMIN</div>
            <a href="<?php echo site_url('admin/admin') ?>">
                <div class="panel-body text-center"><i class="fa fa-group fa-4x"></i><span class="badge">
                        <?php echo $jml_user ?>
                    </span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/admin') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default">
            <div class="panel-heading">PENGATURAN</div>
            <a href="<?php echo site_url('admin/pengaturan') ?>">
                <div class="panel-body text-center"><i class="fa fa-cog fa-4x"></i><span class="badge">8</span></div>
            </a>
            <div class="panel-footer"><a href="<?php echo site_url('admin/pengaturan') ?>">Lihat Semua <i
                        class="fa fa-arrow-right"></i></a></div>
        </div>
    </div>
</div>