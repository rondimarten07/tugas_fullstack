<div class="jumbotron">
    <div class="container">
        <div class="col-md-4">
        </div>

        <div class="col-md-4 text-center">
            <img src="<?php echo base_url('assets/tjc/img/logo_bisaresep.png') ?>" style="display:inline-block; max-width: 85%; background-color: rgba(204,203,202,0.80); padding: 15px;" />
            <a href="<?php echo site_url() ?>">

                <h2 style="color: white;">
                    <?php echo $web->judul ?>
                </h2>
                <p style=" font-size:12px; color: white">
                    <?php echo $web->tagline ?>
                </p>
            </a>

        </div>
        <div class="col-md-4  ">
        </div>

    </div>
</div>



<div class="container">
    <div class="col-md-4">
    </div>

    <div class="col-md-4 text-center formcari">

        <form class="navbar-form" method="get">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="keyword">
            </div>
            <button type="submit" class="btn btn-default" name="cari">Cari!</button>
        </form>

    </div>

    <div class="col-md-4  ">
    </div>
</div>


<div class="container">
    <div class="col-md-12 text-center">
        <h1 class="judulkonten">KUMPULAN MASAKAN BISA RESEP</h1>
        <h6 class="judulkonten2">dijamin berkualitas</h6>
    </div>
</div>

<div class="container">
    <div class="row">

        <?php if (count($produk) >= 3) : ?>
            <?php for ($i = 0; $i <= 2; $i++) { ?>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style="background-size:cover;"><img src="<?php echo base_url('assets/tjc/img/produk/' . $produk[$i]->foto) ?>" class="img-responsive" style="width:100%" alt="Image" onclick=""></div>
                        <div class="panel-footer"><?php echo $produk[$i]->nama ?></div>
                        <div>
                            <form action="<?php echo site_url('detailresep') ?>" method="post">
                                <input hidden type="text" name="id" value="<?php echo $produk[$i]->id ?>">
                                <button class="btn btn-default vertical-center" style="margin-left: 20px;margin-top:10px;" type="submit" name="detail">detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php else : ?>

            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">BARANG TERBARU</div>
                    <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/cctv.jpg') ?>" class="img-responsive" style="width:100%" alt="Image" /></a></div>
                    <div class="panel-footer">Kamera CCTV</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">BARANG TERBARU</div>
                    <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/komputer-asesoris.jpg') ?>" class="img-responsive" style="width:100%" alt="Image" /></a></div>
                    <div class="panel-footer">Perlengkapan Kantor dan Komputer</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">BARANG TERBARU</div>
                    <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/komputer-kasir.jpg') ?>" class="img-responsive" style="width:100%" alt="Image" /></a></div>
                    <div class="panel-footer">Komputer Kasir</div>
                </div>
            </div>
            <div>
            </div>
        <?php endif; ?>
    </div>
</div><br>





<!-- Modal Tampil detail Produk -->
<div class="modal fade" id="modal-detail-produk" tabindex="-1" role="dialog" aria-labelledby="editGambar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">

                <img src="" class="img img-responsive" id="gambar-produk" />
                <h4 id="harga"></h4>
                <div id="keterangan"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>
<!-- Modal tampil detail produk -->

<script>
    function detail(data) {
        console.log(data);
        $("#myModalLabel").html(data.nama);
        $("#gambar-produk").attr("src", data.foto);
        $("#harga").html(data.harga);
        $("#keterangan").html(data.keterangan);
        $("#modal-detail-produk").modal('show');
    }
</script>