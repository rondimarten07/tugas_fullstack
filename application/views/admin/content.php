<div class="container-fluid">
    <div class="row">

        <div class="col-sm-3 col-md-2 sidebar" style="background-color: #B4846C; ">
            <?php $this->load->view('admin/sidebar'); ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <?php $this->load->view('admin/'.$page); ?>
        </div>
    </div>
</div>