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
                                href="<?php echo site_url('produk') ?>">Makanan</a></li>
                        <li><a href="#">Minuman</a></li>

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