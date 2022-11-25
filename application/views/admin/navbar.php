<nav class="navbar navbar-default navbar-fixed-top"
    style="border-bottom: 1px solid #FCDEC0; background-color: #B4846C; ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url('admin/home') ?>" style="color: #FCDEC0;"><img
                    src="<?php echo base_url('assets/tjc/img/logo_bisaresep.png') ?>"
                    style="display:inline; width:80px; " />
                <?php echo $web->judul ?></a>
        </div>

        <div class="dropdown">
            <a href="#" class="navbar-brand dropdown-toggle glyphicon glyphicon-menu-hamburger" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true" style="color: #E5B299"></a>

            <ul class="dropdown-menu">
                <li><a href="#">Makanan Berkuah</a></li>
                <li><a href="#">Minuman</a></li>
                <li><a href="#">Cemilan</a></li>
                <li><a href="#">Makanan Goreng</a></li>
            </ul>
        </div>

        <!-- Tombol search  -->
        <form class="navbar-form navbar-left ">
            <div class="form-group ">

                <input type="text" class="form-control" style="width: 300px;" placeholder="Search">

            </div>
        </form>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('admin/profil/') ?>" style="color: #FCDEC0;"><i class="fa fa-user"></i>
                        <?php echo $this->session->userdata('nama'); ?></a></li>
                <li><a href="<?php echo site_url('admin/profil/edit') ?>" style="color: #FCDEC0;"><i
                            class="fa fa-pencil"></i> Edit Profil</a>
                </li>
                <li><a href="<?php echo site_url("admin/login/logout") ?>" style="color: #FCDEC0;"><i
                            class="fa fa-power-off"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>