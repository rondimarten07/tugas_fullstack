<div class="jumbotron">
  <div class="container">
	<div class="col-md-6 judul">
		<a href="<?php echo site_url() ?>">
		<img src="<?php echo base_url('assets/tjc/img/logo-tangsi.png') ?>" class="pull-left" style="display:inline; max-width:90px; background: rgba(0,0,0,0.3); border-radius:50%;margin-right:32px"/>
		<h3><?php echo $web->judul ?></h3>
		<p style="font-size:12px"><?php echo $web->tagline ?></p>
		</a>
	</div>
  </div>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url() ?>"><i class="fa fa-home"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php echo ($page == 'home') ?'active':'' ?>"><a href="<?php echo site_url() ?>">Home</a></li>
        <li class="<?php echo ($page == 'produk') ?'active':'' ?>"><a href="<?php echo site_url('produk') ?>">Produk</a></li>
        <li class="<?php echo ($page == 'jasa') ?'active':'' ?>"><a href="<?php echo site_url('jasa') ?>">Layanan &amp; Jasa</a></li>
        <li class="<?php echo ($page == 'promo') ?'active':'' ?>"><a href="<?php echo site_url('promo') ?>">Promo</a></li>
        <li class="<?php echo ($page == 'paket') ?'active':'' ?>"><a href="<?php echo site_url('paket') ?>">Paket</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo ($page == 'tentang') ?'active':'' ?>"><a href="<?php echo site_url('tentang') ?>">Tentang Kami</a></li>
        <li class="<?php echo ($page == 'kontak') ?'active':'' ?>"><a href="<?php echo site_url('kontak') ?>">Kontak</a></li>
        <li><a href="<?php echo site_url('admin') ?>">Masuk <i class="fa fa-sign-in"></i></a></li>
      </ul>
    </div>
  </div>
</nav>
