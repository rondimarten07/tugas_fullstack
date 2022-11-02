<div class="container">    
  <div class="row">
	<?php if(count($produk) > 0): ?>
	<?php foreach($produk as $produk){ ?>
    <div class="col-sm-4">
      <div class="panel panel-default">
        <div class="panel-body"><img src="<?php echo base_url('assets/tjc/img/produk/'.$produk->foto) ?>" class="img-responsive" style="width:100%" alt="Image" onclick="detail({
			'id': '<?php echo $produk->id ?>',
			'nama': '<?php echo $produk->nama ?>',
			'harga': '<?php echo $produk->harga ?>',
			'jenis': '<?php echo $produk->jenis ?>',
			'keterangan': '<?php echo $produk->keterangan ?>',
			'foto': '<?php echo base_url('assets/tjc/img/produk/'.$produk->foto) ?>'
		  })"></div>
        <div class="panel-footer"><?php echo $produk->nama ?></div>
      </div>
    </div>
	<?php } ?>
	<?php else: ?>

    <div class="col-sm-12"> 
      <div class="panel panel-default">
        <div class="panel-body">Belum ada data</div>
      </div>
    </div>
	
	<?php endif; ?>
  </div>
</div>

<div class="container">
	<div class="col-sm-12"> 
		
			<?php echo $halaman ?>
		
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