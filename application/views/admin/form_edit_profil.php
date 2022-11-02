<div class="panel panel-default col-md-8">
	<div class="panel-body">
		<form action="<?php echo site_url('admin/profil/update') ?>" method="post">
		<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Edit Profil</h4>
		</div>
                                
		<div class="modal-body">
		
			<input type="hidden" name="id" value="<?php echo $user->id ?>"/>

			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $user->nama ?>" placeholder="Nama lengkap"/>
            </div>
            <div class="form-group">
				<label for="nama">Telepon</label>
				<input type="text" class="form-control" name="telepon" value="<?php echo $user->telepon ?>" placeholder="Nomer telepon"/>
            </div>
            <div class="form-group">
				<label for="nama">Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo $user->username ?>" placeholder="Username"/>
            </div>

            <div class="form-group">
				<label for="nama">Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $user->email ?>" placeholder="Alamat email"/>
            </div>
            
			<?php if($this->session->userdata('akses') == 'admin'): ?>
				<div class="radio">
					<?php $akses = $user->akses ?>
                    <span>Tipe user: </span>
                    <label>
                        <input type="radio" class="radio" name="akses" value="admin" <?php echo $akses == 'admin' ? 'checked' : '' ?>/> Admin
                    </label>
                    &nbsp;
                    <label>
                         <input type="radio" class="radio" name="akses" value="staff" <?php echo $akses == 'staff' ? 'checked' : '' ?>/> Staff
                   </label>
                </div>
			<?php endif ?>
			<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        </form>
        </div>
                    
	</div>
</div>