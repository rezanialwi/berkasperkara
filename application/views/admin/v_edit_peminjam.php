<?php $this->load->view("admin/v_header.php") ?>
  <!-- =============================================== -->
	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo site_url('admin/dasboard') ?>">Home</a>
							</li>

							<li>
								<a href="<?php echo site_url('admin') ?>">Admin</a>
							</li>
							<li class="active">Edit Peminjaman</li>
						</ul><!-- /.breadcrumb -->
            

					<div class="page-content">

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
					<div class="page-header">
							<h1>
								Edit Data Peminjaman

							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                	<?php foreach($peminjaman as $u){ ?>
                         <form action="<?=base_url()?>admin/update" method="post"  class="form-horizontal" role="form">
                       <div class="form-group">

										<div class="col-sm-9">
											<input type="hidden" id="form-field-1" value="<?php echo $u->id_peminjaman ?>" class="col-xs-10 col-sm-5" name="id_peminjaman" />
										</div>
									</div>             
                       <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Peminjaman</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" value="<?php echo $u->nama_peminjam ?>" class="col-xs-10 col-sm-5" name="nama_peminjam" />
										</div>
									</div>
						
							<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Berkas Yang Dipinjam Nomor </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder=" Berkas Yang Dipinjam Nomor" class="form-control" name="berkas_dipinjam" value="<?php echo $u->berkas_dipinjam ?>"  />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right " for="form-field-1" > Tanggal Pinjam </label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" class="col-xs-10 col-sm-5 " name="tgl_pinjam" value="<?php echo $u->tgl_pinjam ?>"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tanggal Kembali</label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" class="col-xs-10 col-sm-5" name="tgl_kembali" value="<?php echo $u->tgl_kembali ?>"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Keperluan</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" class="col-xs-10 col-sm-5" name="tujuan" value="<?php echo $u->tujuan ?>"/>
										</div>
									</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Status Berkas</label>

										<div class="col-sm-9">
										 <?php
                          echo form_dropdown('status', array('Pilih', 'dipinjam'=>'dipinjam', 'dikembalikan'=>'dikembalikan'), $u->status, "class='form-control'");
                        ?>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Bagian Arsip </label>

										<div class="col-sm-9">
										<?php echo $dropdown_pegawai ?>
										</div>
									</div>
								
									<!-- <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button> -->
										<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="btn btn-info" value="Tambah">
                                                
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								<a href="<?php echo site_url('admin') ?>" class="btn btn-warning">	<i class="ace-icon fa fa-home bigger-110">Kembali</i></a>
											
										</div>
									</div>
                                    </form>
                                    <?php } ?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


  <?php $this->load->view("admin/v_footer.php") ?>