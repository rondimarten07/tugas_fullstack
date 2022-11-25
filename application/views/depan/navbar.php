<div class="jumbotron">
  <div class="container">
    <div class="col-md-6 judul">
      <a href="<?php echo site_url() ?>">
        <img src="<?php echo base_url('assets/tjc/img/logo-tangsi.png') ?>" class="pull-left" style="display:inline; max-width:90px; background: rgba(0,0,0,0.3); border-radius:50%;margin-right:32px" />
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
        <li class="<?php echo ($page == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url() ?>">Home</a></li>
        <li class="<?php echo ($page == 'makanan') ? 'active' : '' ?>"><a href="<?php echo site_url('makanan') ?>">Resep Makanan</a></li>
        <li class="<?php echo ($page == 'minuman') ? 'active' : '' ?>"><a href="<?php echo site_url('minuman') ?>">Resep Minuman</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php echo ($page == 'tentang') ? 'active' : '' ?>"><a href="<?php echo site_url('tentang') ?>">Tentang Kami</a></li>
        <li class="<?php echo ($page == 'kontak') ? 'active' : '' ?>"><a href="<?php echo site_url('kontak') ?>">Kontak</a></li>
        <li><a href="<?php echo site_url('admin') ?>">Masuk <i class="fa fa-sign-in"></i></a></li>
      </ul>
      <div class="container-fluid container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color: #E5B299" href="<?php echo site_url() ?>"><i class="fa fa-home"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="<?php echo ($page == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url() ?>" style="color: #E5B299">Home</a>
            </li>

            <!-- Resep -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #E5B299">Resep <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo ($page == 'produk') ? 'active' : '' ?>"><a href="<?php echo site_url('produk') ?>">Makanan Berkuah</a></li>
                <li><a href="#">Minuman</a></li>
                <li><a href="#">Cemilan</a></li>
                <li><a href="#">Makanan Goreng</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo site_url('admin') ?>" style="color: #E5B299">Masuk <i class="fa fa-sign-in"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</nav>