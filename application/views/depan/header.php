<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $web->judul ?>
    </title>

    <!-- Ikon -->
    <link rel="icon" href="<?php echo base_url('assets/tjc/img/logo_bisaresep.png') ?>" />

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
        border-radius: 0;
        margin-bottom: 0;
        background-color: #B4846C;
    }


    .dropdown-menu>li>a {
        color: #E5B299;
    }


    /* Remove the jumbotron's default bottom margin */



    .judul>a {
        color: white;
        text-decoration: none;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #B4846C;
        padding: 25px;
        color: #FCDEC0;
    }

    .panel-body img:hover {
        opacity: 0.9;
        cursor: pointer;
    }

    .navbar-form {
        padding: 20px;
        background: #B4846C;
        box-shadow: 0 0 20px black;
        border-radius: 5px;
        margin-bottom: 50px;
        margin-top: -40px;

    }

    .jumbotron {
        background-image: url("assets/tjc/img/bg_home.png");
        margin-bottom: 0;
        background-size: cover;
    }

    .judulkonten {
        font-size: 24px;
        font-weight: 600;

    }

    .form-group>input {
        background-color: #FCDEC0;

    }


    .btn-default {
        background-color: #7D5A50;
        color: #FCDEC0;
    }

    .judulkonten {
        color: #7D5A50;
    }

    .judulkonten2 {
        color: #7D5A50;
    }
    </style>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/tjc/js/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')
    </script>
</head>

<body>