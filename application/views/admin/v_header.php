<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Aplikasi Peminjaman Arsip Berkas Perkara</title>
		 <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/gallery/logo3.ico">

		<meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	 <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/datatables.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets2/font/glyphicons-halflings-regular.ttf">
	
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-colorpicker.min.css" />



		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url();?>assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo site_url('admin/dasboard') ?>" class="navbar-brand">
						<small>
							<img class="nav-user-photo" src="<?php echo base_url();?>assets/images/gallery/logo.png" width="20px" height="30px" />
							Aplikasi Peminjaman Arsip Berkas Perkara
						</small>
					</a>
				</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										

									
								
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									
								</li>
							</ul>
						</li>

					
							
							
							</a>

						
						</li>

						<li class="green dropdown-modal">
							

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
										
										</li>
									</ul>
								</li>

								
							</ul>
	
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/images/gallery/logo.png"  />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $this->session->userdata("nama"); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="<?php echo base_url('login/logout'); ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<a href="<?php echo site_url('admin/dasboard') ?>"  class="btn btn-success">
							<i class="ace-icon fa fa-tachometer"></i>
						</a>

						<a href="<?php echo site_url('admin') ?>"  class="btn btn-info">
							<i class="ace-icon fa fa-table"></i>
						</a>

						<a href="<?php echo site_url('pegawai') ?>" class="btn btn-warning">
							<i class="ace-icon fa fa-user"></i>
						</a>

						<a href="<?php echo site_url('akun') ?>" class="btn btn-danger">
							<i class="ace-icon fa fa-users"></i>
						</a>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo site_url('admin/dasboard') ?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
          	<li class="">
						<a href="<?php echo site_url('admin') ?>">
							<i class="menu-icon fa fa-table"></i>
							<span class="menu-text"> Data Peminjaman </span>
						</a>

						<b class="arrow"></b>
          </li>
		  <li class="">
						<a href="<?php echo site_url('pegawai') ?>">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Data Pegawai Arsip</span>
						</a>

						<b class="arrow"></b>
          </li>
          	<li class="">
						<a href="<?php echo site_url('akun') ?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Data User </span>
						</a>

						<b class="arrow"></b>
					</li>

						<li class="">
						<a href="<?php echo site_url('login/logout') ?>"  onclick="return confirm('Yakin ingin Keluar ?');">
							<i class="menu-icon fa fa-home"></i>
						<span class="menu-text"> Logout </span>
						</a>

						<b class="arrow"></b>
					</li>
					
						</ul>
					</li>
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
			