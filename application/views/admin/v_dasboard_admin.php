<?php $this->load->view("admin/v_header.php") ?>
  <!-- =============================================== -->
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a class="active">Home</a>
							</li>

						</ul><!-- /.breadcrumb -->
            
						

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->


						<div class="row">
							<div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->


								<div class="row">
									<div class="col-xs-12">
								
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<div class="table-header text-center">
											Selamat Datang di Aplikasi Peminjaman Arsip Berkas Perkara. Bagian Hukum
                                        </div>
           	<div class="row">
							<div class="col-xs-12 infobox-container">
								
		
										<div class="infobox infobox-green">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-table"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Data Peminjaman</div>
												<span class="infobox-data-number"><?php echo $peminjaman['hasil']; ?> Orang</span>	

											</div>
										</div>

										<div class="infobox infobox-blue">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-user"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Data Pegawai Arsip</div>
												<span class="infobox-data-number"><?php echo $pegawai['hasil']; ?> Orang</span>	
													</div>
											</div>

											<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-users"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">Data User</div>
												<span class="infobox-data-number"><?php echo $admin['hasil']; ?> Orang</span>	

											</div>

											
										</div>
										<br>
										<br>
										
										<a href="<?php echo site_url('admin/tambah_peminjaman') ?>" class="btn btn-primary">
    <i class="ace-icon fa fa-plus fa-sm text-white-50"></i>Tambah Data peminjaman</a>

    

    <script src="<?= base_url() ?>assets2/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets2/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets2/js/datatables.js"></script>
    <script src="<?= base_url() ?>assets2/js/dataTables.bootstrap4.js"></script>

    <?php require '__script.php'; ?>
										</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


  <?php $this->load->view("admin/v_footer.php") ?>