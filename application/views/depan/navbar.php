<nav class="navbar navbar-default">
    <div class="container-fluid container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color: #E5B299" href="<?php echo site_url() ?>"><i
                    class="fa fa-home"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="<?php echo ($page == 'home') ? 'active' : '' ?>"><a href="<?php echo site_url() ?>"
                        style="color: #E5B299">Home</a>
                </li>

                <!-- Resep -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false" style="color: #E5B299">Resep <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php echo ($page == 'produk') ? 'active' : '' ?>"><a
                                href="<?php echo site_url('produk') ?>">Makanan Berkuah</a></li>
                        <li><a href="#">Minuman</a></li>
                        <li><a href="#">Cemilan</a></li>
                        <li><a href="#">Makanan Goreng</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="<?php echo site_url('admin') ?>" style="color: #E5B299">Masuk <i
                            class="fa fa-sign-in"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <div class="col-md-4">
        </div>

        <div class="col-md-4 text-center">
            <img src="<?php echo base_url('assets/tjc/img/logo_bisaresep.png') ?>"
                style="display:inline-block; max-width: 85%; background-color: rgba(204,203,202,0.80); padding: 15px;" />
            <a href="<?php echo site_url() ?>">

                <h2 style="color: white;">
                    <?php echo $web->judul ?>
                </h2>
                <p style=" font-size:12px; color: white">
                    <?php echo $web->tagline ?>
                </p>
            </a>

        </div>
        <div class="col-md-4  ">
        </div>

    </div>
</div>


</div>
<div class="container">
    <div class="col-md-4">
    </div>

    <div class="col-md-4 text-center formcari">
        <form class="navbar-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Cari!</button>
        </form>

    </div>
    <div class="col-md-4  ">
    </div>
</div>


<div class="container">
    <div class="col-md-12 text-center">
        <h1 class="judulkonten">KUMPULAN MASAKAN BISA RESEP</h1>
        <h6 class="judulkonten2">dijamin berkualitas</h6>
    </div>
</div>

<style>
.jumbotron {
    background-image: url("assets/tjc/img/bg_home.png");
    margin-bottom: 0;
    background-size: cover;
}
</style>