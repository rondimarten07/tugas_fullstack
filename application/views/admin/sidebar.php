<!-- Sidebar -->

<ul class="nav nav-sidebar">
    <li class="<?php echo ($page=='home') ? "active" : "" ?>"><a href="<?php echo site_url("admin/home") ?>"
            style="color: #FCDEC0;"><i class="fa fa-home"></i> Home</a></li>
    <li class="<?php echo ($page=='produk') ? "active" : "" ?>"><a href="<?php echo site_url("admin/produk") ?>"
            style="color: #FCDEC0;"><i class="fa fa-shopping-cart"></i> Produk</a></li>
    <!--<li class="<?php echo ($page=='pesanan') ? "active" : "" ?>"><a href="<?php echo site_url("pesanan") ?>">Pesanan</a></li>
	<li class="<?php echo ($page=='member') ? "active" : "" ?>"><a href="<?php echo site_url("admin/member") ?>">Member</a></li>-->
    <li class="<?php echo ($page=='admin') ? "active" : "" ?>"><a href="<?php echo site_url("admin/admin") ?>"
            style="color: #FCDEC0;"><i class="fa fa-users"></i> Admin</a></li>

    <?php if($this->session->userdata('akses') == 'admin'): ?>
    <li class="<?php echo ($page=='pengaturan') ? "active" : "" ?>" style="color: #FCDEC0;"><a
            href="<?php echo site_url("admin/pengaturan") ?>"><i class="fa fa-cog"></i> Pengaturan</a></li>
    <?php endif; ?>

    <li class="separetor"></li>
    <!--<li class="<?php echo ($page=='panduan') ? "active" : "" ?>"><a href="<?php echo site_url("admin/admin") ?>"><i class="fa fa-book"></i> Panduan</a></li>-->
    <li class="<?php echo ($page=='info') ? "active" : "" ?>"><a href="<?php echo site_url("admin/info") ?>"
            style="color: #FCDEC0;"><i class="fa fa-certificate"></i> Versi 1.0</a></li>

</ul>

<!-- /#sidebar-wrapper -->