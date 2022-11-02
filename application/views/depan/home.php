<div class="container">    
  <div class="row">
  
  <?php if(count($produk) >= 3):?>
  <?php for($i = 0; $i <= 2; $i++){ ?>
	  <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body"><img src="<?php echo base_url('assets/tjc/img/produk/'.$produk[$i]->foto) ?>" class="img-responsive" style="width:100%" alt="Image" onclick="detail({
			'id': '<?php echo $produk[$i]->id ?>',
			'nama': '<?php echo $produk[$i]->nama ?>',
			'harga': '<?php echo $produk[$i]->harga ?>',
			'jenis': '<?php echo $produk[$i]->jenis ?>',
			'keterangan': '<?php echo $produk[$i]->keterangan ?>',
			'foto': '<?php echo base_url('assets/tjc/img/produk/'.$produk[$i]->foto) ?>'
		  })"></div>
        <div class="panel-footer"><?php echo $produk[$i]->nama ?></div>
      </div>
    </div>
  <?php } ?>
  <?php else: ?>
  
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-heading">BARANG TERBARU</div>
        <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/cctv.jpg') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Kamera CCTV</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">BARANG TERBARU</div>
        <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/komputer-asesoris.jpg') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Perlengkapan Kantor dan Komputer</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">BARANG TERBARU</div>
        <div class="panel-body"><a href="<?php echo site_url('produk') ?>"><img src="<?php echo base_url('assets/tjc/img/komputer-kasir.jpg') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Komputer Kasir</div>
      </div>
    </div>
	
	<?php endif; ?>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">LAYANAN &amp; JASA</div>
        <div class="panel-body"><a href="<?php echo site_url('jasa') ?>"><img src="<?php echo base_url('assets/tjc/img/layanan.png') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Networking &amp; Software Development</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">PROMO</div>
        <div class="panel-body"><a href="<?php echo site_url('promo') ?>"><img src="<?php echo base_url('assets/tjc/img/promo.png') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Kumpulkan poin dan dapatkan hadiah</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-warning">
        <div class="panel-heading">PAKET</div>
        <div class="panel-body"><a href="<?php echo site_url('paket') ?>"><img src="<?php echo base_url('assets/tjc/img/paket.png') ?>" class="img-responsive" style="width:100%" alt="Image"/></a></div>
        <div class="panel-footer">Paket software dan hardware</div>
      </div>
    </div>
  

  </div>
</div>




<!-- Modal Tampil detail Produk -->
<div class="modal fade" id="modal-detail-produk" tabindex="-1" role="dialog" aria-labelledby="editGambar" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
               
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body">

				<img src="" class="img img-responsive" id="gambar-produk"/>
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

function detail(data){
	console.log(data);
	$("#myModalLabel").html(data.nama);
	$("#gambar-produk").attr("src", data.foto);
	$("#harga").html(data.harga);
	$("#keterangan").html(data.keterangan);
	
	$("#modal-detail-produk").modal('show');
}

</script>