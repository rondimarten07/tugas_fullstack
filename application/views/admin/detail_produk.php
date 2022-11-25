<h3><a href="javascript:history.back()" class="btn btn-default"><i class="fa fa-arrow-left"></i></a> Detail Produk <a
        href="<?php echo site_url('admin/produk/edit/'.$produk->id)?>" class="btn btn-default pull-right"><i
            class="fa fa-pencil"></i> Edit</a> <a href="<?php echo site_url('admin/produk/hapus/'.$produk->id)?>"
        class="btn btn-danger pull-right" style="margin-right:10px"><i class="fa fa-trash"></i> Hapus</a></h3>
<hr>

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/tjc/img/produk/'.$produk->foto) ?>" style="max-width:100%" />


            </div>
            <div class="col-md-6">
                <h2><?php echo $produk->nama ?></h2>
                <h4><?php echo $produk->harga ?></h4>
                <?php echo $produk->keterangan ?>
            </div>
        </div>
    </div>
</div>