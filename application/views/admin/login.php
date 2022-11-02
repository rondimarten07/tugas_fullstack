
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/tjc/img/logo-tangsi.png') ?>">

    <title>Tangsi Jaya Computer</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">


  </head>

  <body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">



                <div class="panel panel-default" style="margin-top: 32%;">
                    <div class="panel-body">

                        <h3><img src="<?php echo base_url('assets/tjc/img/logo-tangsi.png') ?>" style="max-width:32px" /> Login Administrator</h3>
                        <a href="<?php echo site_url() ?>" class="pull-right"><i class="fa fa-home fa-lg"></i></a>
                        <hr>

                        <form action="<?php echo site_url('admin/login/proses_login') ?>" method="post">
                            <div class="form-group">
                                <div class="input-group col-md-12">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" class="form-control" name="username" placeholder="username" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group col-md-12">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" class="form-control" name="password" placeholder="password" required/>
                                </div>
                            </div>

                            <!-- <div class="form-group ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="ingat-saya" /> Ingat saya
                                    </label>
                                    <a href="#" class="pull-right">Lupa password?</a>
                                </div>
                            </div>-->

                            <div class="form-group">
                                <?php if($this->session->gagal): ?>
                                    <div class="alert alert-warning data-dismiss flat animated fadeInDown">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $this->session->gagal ?>
                                    </div>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <a href="javascript:window.history.back()" class="pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Masuk</button>
                            </div>
                        </form>


                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/tjc/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
