<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Dazzle</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">

    <!-- script
   ================================================== -->
    <script src="<?php echo base_url('assets/js/modernizr.js')?>"></script>
    <script src="<?php echo base_url('assets/js/pace.min.js')?>"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico')?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">

</head>

<body>

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

   		<div class="header-logo">
	        <a href="home.php">Dazzle</a>
	    </div>

	   	<nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li><a href="<?php echo base_url('index.php/home/index')?>" title="home">Home</a></li>
                <li><a href="<?php echo base_url('index.php/sewa/form')?>" title="sewa">Sewa</a></li>
                <?php 
                    if($this->session->userdata('ROLE')=='administrator'){
                ?>
                <li><a href="<?php echo base_url('index.php/mobil/index')?>" title="mobil">Mobil</a></li>
                <li><a href="<?php echo base_url('index.php/merk/index')?>" title="merk">Merk</a></li>
                <li><a href="<?php echo base_url('index.php/perawatan/index')?>" title="perawatan">Perawatan</a></li>
                <li><a href="<?php echo base_url('index.php/jenis_perawatan/index')?>" title="jenis-perawatan">Jenis Perawatan</a></li>
                <li><a href="<?php echo base_url('index.php/users/index')?>" title="users">Users</a></li>
                <?php } ?>
                
			</ul>

            <a href="<?php echo base_url('index.php/login/index')?>" title="log-out" class="button button-primary cta">Logout</a>
		</nav>	
   	
   </header> <!-- /header -->