<?php $url_akses = $this->uri->segment(3);?>

<div class="btn-group" role="group" aria-label="...">
      <?php if($this->session->userdata('akses') == 'admin'): ?>
      <a href="#!" class="btn btn-success" data-toggle="modal" data-target="#modal-tambah-user"><i class="fa fa-plus"></i> Tambah</a>
      <?php endif; ?>
      <a href="<?php echo site_url('admin/admin') ?>" class="btn btn-default <?php echo $url_akses == '' ? 'active disabled' : '' ?>">Semua <span class="badge"><?php echo $total_user ?></span></a>
      <a href="<?php echo site_url('admin/admin/admin') ?>" class="btn btn-default <?php echo $url_akses == 'admin' ? 'active disabled' : '' ?>">Admin <span class="badge"><?php echo $total_staff ?></span></a>
      <a href="<?php echo site_url('admin/admin/staff') ?>" class="btn btn-default <?php echo $url_akses == 'staff' ? 'active disabled' : '' ?>">Staff <span class="badge"><?php echo $total_admin ?></span></a>

</div>

 <hr>
                <div class="panel panel-default">
                    <?php if( count($user) > 0) : ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Akses Role</th>
                                        <?php if( $this->session->userdata('akses') == 'admin' ): ?>
                                        <th>Tindakan</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($user as $admin) { ?>
									
											
										
                                    <tr>
                                        <td><?php echo $admin->nama ?></td>
                                        <td><?php echo $admin->telepon ?></td>
                                        <td><?php echo $admin->email ?></td>
                                        <td><?php echo $admin->akses ?></td>
                                        <?php if( $this->session->userdata('akses') == 'admin' ): ?>
                                        <td>

                                            <a href="#!" onclick="editUser({
                                                'id': '<?php echo $admin->id ?>',
                                                'nama': '<?php echo $admin->nama ?>',
                                                'telepon': '<?php echo $admin->telepon ?>',
                                                'username': '<?php echo $admin->username ?>',
                                                'email': '<?php echo $admin->email ?>',
                                                'akses': '<?php echo $admin->akses ?>'
                                            })"><i class="fa fa-pencil"></i> Edit</a> &nbsp;
                                            <a href="#!" onclick="ubahPassword('<?php echo $admin->id ?>')" class="text-warning"><i class="fa fa-lock"></i> Ubah Password</a> &nbsp;
                                            <a href="#!" class="text-danger" onclick="hapus('<?php echo $admin->id ?>')"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
									
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                    <div class="panel-body">
                        Tidak dapat menampilkan data, mungkin data masih kosong. Coba untuk menambahkannya.
                    </div>
                    <?php endif; ?>
                </div>
				
				
				
<!-- Modal Tambah user -->
    <div class="modal fade" id="modal-tambah-user" tabindex="-1" role="dialog" aria-labelledby="tambahUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo site_url('admin/admin/register') ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama lengkap"  required/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Telepon</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Nomer telepon"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Alamat email" required/>
                        </div>
                        <div class="radio">
                            <span>Tipe user: </span>
                            <label>
                                <input type="radio" class="radio" name="akses" value="admin" required/> Admin
                            </label>
                            &nbsp;
                            <label>
                                <input type="radio" class="radio" name="akses" value="staff" required/> Staff
                            </label>
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
    <!-- End modal tambah -->

    <!-- Modal edit user -->
    <div class="modal fade" id="modal-edit-user" tabindex="-1" role="dialog" aria-labelledby="editUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo site_url('admin/admin/update') ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" id="id-edit" name="id"/>
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama-edit" placeholder="Nama lengkap"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Telepon</label>
                            <input type="text" class="form-control" name="telepon"  id="telepon-edit" placeholder="Nomer telepon"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Username</label>
                            <input type="text" class="form-control" name="username" id="username-edit" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="email" class="form-control" name="email"   id="email-edit" placeholder="Alamat email"/>
                        </div>
                        <div class="radio">
                            <span>Tipe user: </span>
                            <label>
                                <input type="radio" class="radio" name="akses" id="admin-edit" value="admin"/> Admin
                            </label>
                            &nbsp;
                            <label>
                                <input type="radio" class="radio" name="akses" id="staff-edit" value="staff"/> Staff
                            </label>
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
    <!-- End modal edit -->

    <!-- Modal ubah password user -->
    <div class="modal fade" id="modal-ubah-password" tabindex="-1" role="dialog" aria-labelledby="editUser">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo site_url('admin/admin/ubah_password') ?>" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" id="id-password-edit" name="id"/>
                            <label for="nama">Password Baru</label>
                            <input type="password" class="form-control" name="password-baru" placeholder="Password Baru" autocomplete="off"/>
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

    <script type="text/javascript">
        function editUser(data){
            $("#id-edit").val(data.id);
            $("#nama-edit").val(data.nama);
            $("#telepon-edit").val(data.telepon);
            $("#username-edit").val(data.username);
            $("#email-edit").val(data.email);
            if(data.akses == 'admin'){
                $("#admin-edit").attr("checked", "checked");
            }
            if( data.akses == 'staff') {
                $("#staff-edit").attr("checked", "checked");
            }
            $("#modal-edit-user").modal('show');
        }

        function ubahPassword(id){
            $("#id-password-edit").val(id);
            $("#modal-ubah-password").modal('show');
        }

        function hapus(id){
            $("#yakin-hapus").attr("href", "<?php echo site_url('admin/admin/hapus/');?>/"+id)
            $("#modal-hapus").modal('show');
        }
    </script>