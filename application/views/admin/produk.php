<?php $url_jenis = $this->uri->segment(4); ?>

<div class="btn-group" role="group" aria-label="...">
	<a href="#!" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah-user" onclick="$('#form-tambah').toggle('slide')"><i class="fa fa-plus"></i> Tambah</a>
	<a href="<?php echo site_url('admin/produk') ?>" class="btn btn-default <?php echo $url_jenis == '' ? 'active disabled' : '' ?>" >Semua <span class="badge"><?php echo $total_semua ?></span></a>
	<a href="<?php echo site_url('admin/produk/jenis/barang') ?>" class="btn btn-default <?php echo $url_jenis == 'barang' ? 'active disabled' : '' ?>">Barang <span class="badge"><?php echo $total_barang ?></span></a>
	<a href="<?php echo site_url('admin/produk/jenis/jasa') ?>" class="btn btn-default <?php echo $url_jenis == 'jasa' ? 'active disabled' : '' ?>">Jasa <span class="badge"><?php echo $total_jasa ?></a>
	<a href="<?php echo site_url('admin/produk/jenis/paket') ?>" class="btn btn-default <?php echo $url_jenis == 'paket' ? 'active disabled' : '' ?>">Paket <span class="badge"><?php echo $total_paket ?></a>
	<a href="<?php echo site_url('admin/produk/jenis/promo') ?>" class="btn btn-default <?php echo $url_jenis == 'promo' ? 'active disabled' : '' ?>">Promo <span class="badge"><?php echo $total_promo ?></a>
</div>

 <hr>

<div class="panel panel-default" id="form-tambah" style="display:none">

	<form action="<?php echo site_url('admin/produk/tambah_produk') ?>" method="post" enctype="multipart/form-data">
    <div class="panel-body">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="nama-barang">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Produk..." required />
				</div>
				
				<div class="form-group">
					<label for="nama-barang">Harga</label>
					<input type="text" class="form-control" name="harga" id="harga-barang" placeholder="Harga..." />
				</div>

                <div class="form-group">
					<label for="jenis">Jenis</label><br>
					<span class="check">
						<label><input type="radio" name="jenis" value="barang" required> Barang</label>&nbsp;
						<label><input type="radio" name="jenis" value="jasa" required> Jasa</label>&nbsp;
						<label><input type="radio" name="jenis" value="paket" required> Paket</label>&nbsp;
						<label><input type="radio" name="jenis" value="promo" required> Promo</label>
					</span>
				</div>
                                

				</div>
				
				<div class="col-md-8">
					<div class="form-group">
                        <label for="nama-barang">Keterangan/Spesifikasi</label>
                        <textarea name="keterangan" class="form-control" rows="15" placeholder="Keterangan atau spesifikasi..."></textarea>
					</div>
                    <div class="form-group">
						<label for="nama-barang">Foto/Gambar</label>
                        <input type="file" name="foto" placeholder="Foto..." />
						<br>
						<i>Ukuran gambar yang disarankan: 600x320 px</i>
					</div>
				</div>
			
			</div><!-- /row -->

			<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
		</div><!-- panel body -->
	</form>
</div>



<script src="<?php echo base_url()?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea', menubar:'', fontsize_formats: "16pt 9pt 10pt 11pt 12pt 26pt 36pt", theme: 'modern',setup : function(ed)
{
    ed.on('init', function() 
    {
        this.getDoc().body.style.fontSize = '16px';
    });
} });</script>
    <script>
    $(document).ready(function(){
		// $('#angka1').maskMoney();
		// $('#angka2').maskMoney({prefix:'US$'});
		$('#harga-barang').maskMoney({prefix:'Rp ', thousands:'.', decimal:',', precision:0});
		// $('#angka4').maskMoney();
	});
    </script>
	



<!-- Daftar Produk -->
<div class="panel panel-default">
	<div class="panel-body table-responsive">
	
	<?php if(count($produk) > 0) : ?>
		<!-- Tampilkan tabel produk -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Kode Produk</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Jenis</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($produk as $barang){ ?>
				<tr>
					<td><?php echo $barang->id ?></td>
					<td>
						<a href="#!" onclick="editGambar('<?php echo base_url('assets/tjc/img/produk/'.$barang->foto) ?>', '<?php echo $barang->id ?>' )"><img src="<?php echo base_url('assets/tjc/img/produk/'.$barang->foto) ?>" style="max-width:24px;max-height:24px"/></a>
						&nbsp;<?php echo $barang->nama ?>
					</td>
					<td><?php echo $barang->harga ?></td>
					<td><?php echo ucfirst($barang->jenis) ?></td>
					<td>
						<a href="<?php echo site_url('admin/produk/edit/' . $barang->id) ?>"><i class="fa fa-pencil"></i> Edit</a>&nbsp;&nbsp;
						<a href="<?php echo site_url('admin/produk/detail/' . $barang->id) ?>"><i class="fa fa-file-text-o"></i> Detail</a>&nbsp;&nbsp;
						<a href="#!" onclick="hapus('<?php echo $barang->id ?>')" class="text-danger"><i class="fa fa-trash"></i> Hapus</a>&nbsp;
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php else: ?>
		<!-- Tampilkan pesan kosong -->
		<span>Produk masih kosong, silahkan tambahkan!</span>
	<?php endif; ?>
	
	</div>
</div>

<div><?php echo $halaman ?></div>

<!-- Modal edit Gambar -->
<div class="modal fade" id="modal-edit-gambar" tabindex="-1" role="dialog" aria-labelledby="editGambar" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo site_url('admin/produk/update_gambar') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ubah Gambar</h4>
                    </div>
                    <div class="modal-body">

                        <img src="" class="img img-responsive" id="edit-gambar-produk"/>
						<hr>
						<div class="form-group">
							<label for="gambar">Pilih File Baru:</label>
							<input type="hidden" value="" id="id-edit" name="id-edit" />
							<input type="file" name="foto"/>
						</div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
		</div>
	</div>
</div>
<!-- Modal edit Gambar -->

<script>
	function editGambar(urlGambar, id){
		console.log(id);
		$("#id-edit").val(id);
		$("#edit-gambar-produk").attr("src", urlGambar);
		$("#modal-edit-gambar").modal("show");
	}
</script>


<!-- Modal konfirmasi hapus user -->
<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="editUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                    <p>Data akan dihapus secara permanen</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" id="yakin-hapus" href="#">Hapus</a>
                </div>

       </div>
    </div>
</div>
<!-- End konfirmasi hapus user -->


<!-- Libarary -->
<script src="<?php echo base_url('assets/plugin-jquery/jquery.maskMoney.min.js')?>"></script>

<script>

    $(document).ready(function(){
		//$('#angka1').maskMoney();
		//$('#angka2').maskMoney({prefix:'US$'});
		$('#harga-barang').maskMoney({prefix:'Rp ', thousands:'.', decimal:',', precision:0});
		//$('#angka4').maskMoney();
	});


	function hapus(id){
		$("#yakin-hapus").attr("href", "<?php echo site_url('admin/produk/hapus/');?>/"+id)
		$("#modal-hapus").modal('show');
	}
</script>