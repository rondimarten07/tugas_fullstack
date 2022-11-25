<!-- Resep -->
<div class="row">
    <div class="col-sm-3" style="background-color: #E5B299; border-radius: 20px; box-shadow: 0 0 5px black;">

        <a href="<?php echo site_url('admin/produk/jenis/barang') ?>">
            <div class="panel-body text-center" style="color: #7D5A50;"><i
                    class=" glyphicon glyphicon-file fa-4x"></i><span class=" badge">
                    <?php echo $jml_produk ?>
                </span></div>
        </a>
        <div class="text-center" style="padding-bottom: 20px;"><a
                href="<?php echo site_url('admin/produk/jenis/barang') ?>" style="color: #7D5A50;">Resep</a></div>
    </div>

    <!-- Pengaturan -->
    <div class="col-sm-3"
        style="background-color: #E5B299; border-radius: 20px; box-shadow: 0 0 5px black; margin-left: 20px;">

        <a href="<?php echo site_url('admin/pengaturan') ?>">
            <div class="panel-body text-center" style="color: #7D5A50;"><i class="fa fa-wrench fa-4x"></i><span
                    class="badge">
                    <?php echo $jml_jasa ?>
                </span></div>
        </a>
        <div class="text-center" style="padding-bottom: 20px;">
            <a href="<?php echo site_url('admin/pengaturan') ?>" style="color: #7D5A50;">Pengaturan </a>
        </div>
    </div>



    <div class="col-sm-3"
        style="background-color: #E5B299; border-radius: 20px; box-shadow: 0 0 5px black; margin-left: 20px;">
        <a href="<?php echo site_url('admin/admin') ?>">
            <div class="panel-body text-center" style="color: #7D5A50;"><i class="fa fa-group fa-4x"></i><span
                    class="badge">
                    <?php echo $jml_user ?>
                </span></div>
        </a>
        <div class="text-center" style="padding-bottom: 20px;"><a href="<?php echo site_url('admin/admin') ?>"
                style="color: #7D5A50;">User/Admin </a></div>