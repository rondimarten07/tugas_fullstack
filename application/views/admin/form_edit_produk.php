<div class="panel panel-default" id="form-tambah">

	<form action="<?php echo site_url('admin/produk/update') ?>" method="post" enctype="multipart/form-data">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $produk->id ?>" />
						<label for="nama-barang">Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $produk->nama ?>" placeholder="Nama Produk..." />
					</div>

					<div class="form-group">
						<label for="nama-barang">Harga</label>
						<input type="text" class="form-control" name="harga" id="harga-barang" value="<?php echo $produk->harga ?>" placeholder="Harga..." />
					</div>

					<div class="form-group">
						<label for="jenis">Jenis</label><br>
						<span class="check">
							<label><input type="radio" name="jenis" <?php echo ($produk->jenis == 'barang') ? "checked" : "" ?> value="makanan"> Makanan</label>&nbsp;
							<label><input type="radio" name="jenis" <?php echo ($produk->jenis == 'jasa') ? "checked" : "" ?> value="minuman"> Minuman</label>&nbsp;
						</span>
					</div>


				</div>

				<div class="col-md-8">
					<div class="form-group">
						<label for="nama-barang">Keterangan/Spesifikasi</label>
						<textarea name="keterangan" class="form-control" rows="15" placeholder="Keterangan atau spesifikasi..."><?php echo $produk->keterangan ?></textarea>
					</div>

				</div>

			</div><!-- /row -->

			<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
		</div><!-- panel body -->
	</form>
</div>

<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector: 'textarea',
		menubar: '',
		fontsize_formats: "16pt 9pt 10pt 11pt 12pt 26pt 36pt",
		theme: 'modern',
		setup: function(ed) {
			ed.on('init', function() {
				this.getDoc().body.style.fontSize = '16px';
			});
		}
	});
</script>
<script>
	$(document).ready(function() {
		// $('#angka1').maskMoney();
		// $('#angka2').maskMoney({prefix:'US$'});
		$('#harga-barang').maskMoney({
			prefix: 'Rp ',
			thousands: '.',
			decimal: ',',
			precision: 0
		});
		// $('#angka4').maskMoney();
	});
</script>



<!-- Libarary -->
<script src="<?php echo base_url('assets/plugin-jquery/jquery.maskMoney.min.js') ?>"></script>

<script>
	$(document).ready(function() {
		// $('#angka1').maskMoney();
		// $('#angka2').maskMoney({prefix:'US$'});
		$('#harga-barang').maskMoney({
			prefix: 'Rp ',
			thousands: '.',
			decimal: ',',
			precision: 0
		});
		// $('#angka4').maskMoney();
	});
</script>