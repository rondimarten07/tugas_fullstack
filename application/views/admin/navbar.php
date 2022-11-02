<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom: 1px solid #ccc">
	<div class="container-fluid">
		<div class="navbar-header">
	      	<a class="navbar-brand" href="<?php echo site_url('admin/home') ?>"><img src="<?php echo base_url('assets/tjc/img/logo-tangsi.png') ?>" style="display:inline; width:22px"/> <?php echo $web->judul ?></a>
		</div>

		<a href="<?php echo site_url()?>" class="navbar-brand" target="blank" title="<?php echo site_url() ?>"><i class="fa fa-external-link-square"></i></a>
  		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		    <ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo site_url('admin/profil/') ?>"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama'); ?></a></li>
				<li><a href="<?php echo site_url('admin/profil/edit') ?>"><i class="fa fa-pencil"></i> Edit Profil</a></li>
				<li><a href="<?php echo site_url("admin/login/logout") ?>"><i class="fa fa-power-off"></i> Logout</a></li>
		    </ul>
	    </div>
	</div>
</nav>
