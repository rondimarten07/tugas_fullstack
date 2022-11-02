<form class="form-horizontal" action="<?php echo site_url('admin/pengaturan/update') ?>" method="post">

<div class="row">
	<div class="col-md-12">
		<h4>Pengaturan Web</h4>
		<hr>
		<div class="panel panel-default">
			<div class="panel-body">
			
			<?php if($this->session->berhasil){ ?>
				<p class="alert alert-success"><i class="fa fa-check"></i> <?php echo $this->session->berhasil ?></p>
			<?php } ?>
			
			<input type="hidden" name="id" value="<?php echo $pengaturan->id ?>">
			
			<br>
			<div class="form-group">
				<label for="judul" class="col-sm-2 control-label">Judul Web</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul" value="<?php echo $pengaturan->judul ?>" required />
				</div>
			</div>
			
			<div class="form-group">
				<label for="tagline" class="col-sm-2 control-label">Selogan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tagline" value="<?php echo $pengaturan->tagline ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="telepon1" class="col-sm-2 control-label">No. Telepon 1</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="telepon1" value="<?php echo $pengaturan->telepon1 ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="telepon2" class="col-sm-2 control-label">No. Telepon 2</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="telepon2" value="<?php echo $pengaturan->telepon2 ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?php echo $pengaturan->email ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="alamat" value="<?php echo $pengaturan->alamat ?>"/>
				</div>
			</div>
			
			<div class="form-group">
				<label for="peta" class="col-sm-2 control-label">Peta Lokasi</label>
				
				<div class="col-sm-10">
					<p><i>Kode Embed <a href="https://maps.google.com" target="blank">Google Maps <i class="fa fa-external-link"></i></a></i></p>
					<textarea name="peta" class="form-control" style="font-family: monospace; height: 120px"><?php echo $pengaturan->peta ?></textarea>
				</div>
			</div>
			
			
			<div class="form-group">
				<label for="tentang" class="col-sm-2 control-label">Tentang</label>
				<div class="col-sm-10">
					<textarea name="tentang" id="about" class="form-control" style="height:300px"><?php echo $pengaturan->tentang ?></textarea>
					<br>
					<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
				</div>
			</div>
			
			
			
			</div><!-- /panel-body -->
		</div><!-- /panel -->
	</div><!-- /col -->
</div><!-- /row -->

</form>


<script src="<?php echo base_url()?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#about', menubar:'', fontsize_formats: "16pt 9pt 10pt 11pt 12pt 26pt 36pt", theme: 'modern',setup : function(ed)
{
    ed.on('init', function() 
    {
        this.getDoc().body.style.fontSize = '16px';
    });
} });</script>