                <div class="panel panel-default col-md-8">
                        <div class="panel-body">
                            <h3><?php echo $user->nama ?> <small>(<?php echo $user->akses ?>)</small></h3>
                            <hr>
                            <p><i class="fa fa-user"></i> <?php echo $user->username ?></p>
                            <p><i class="fa fa-envelope"></i> <?php echo $user->email ?><br>
                                <i class="fa fa-phone-square"></i> <?php echo $user->telepon ?>
                            </p>
                            <p></p>
                            <p><a href="<?php echo site_url('admin/profil/edit') ?>">Edit Profil</a> | <a href="#!" data-toggle="modal" data-target="#modal-ubah-password">Ubah Password</a></p>
                        </div>
                    
                </div>


			
			 <!-- Modal ubah password user -->
    <div class="modal fade" id="modal-ubah-password" tabindex="-1" role="dialog" aria-labelledby="editUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo site_url('admin/profil/ubah_password') ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" id="id-password-edit" name="id" value="<?php echo $user->id ?>"/>
                            <label for="nama">Password Baru</label>
                            <input type="password" class="form-control" name="password-baru" placeholder="Password Baru"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasi-password" placeholder="konfirmasi Password Baru"/>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End ubah password user -->