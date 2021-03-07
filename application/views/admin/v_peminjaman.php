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
							<li class="active">Data Peminjaman</li>
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
								
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<div class="table-header">
											Data Peminjaman Arsip Berkas Perkara
                                        </div>
                                        <a href="<?php echo site_url('admin/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="ace-icon fa fa-plus fa-sm text-white-50"></i>Tambah Data</a>
  <a href="<?php echo site_url('admin/cetak') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="ace-icon fa fa-download fa-sm text-white-50"></i>Cetak Data</a>
    <a href="<?php echo site_url('admin/laporanpdf') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="ace-icon fa fa-download fa-sm text-white-50"></i>Cetak PDF</a>
                                    	<div>
											 <!-- Table disini -->
		  <div class="clearfix"></div>
		  <div class="nav-search" id="nav-search">
							<?php echo form_open('admin/search') ?>
								<span class="input-icon">
									<input type="text" placeholder="Ketik Kata Kunci..." class="nav-search-input" id="nav-search-input" name="keyword" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							<?php echo form_close() ?>
						</div><!-- /.nav-search -->
					</div>
         
		  
           <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td class="center">No Urut</td>
                <td>Nama Peminjam</td>
                <td>Berkas yang Dipinjam</td>
                 <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                
                <td>Keperluan</td>
				<td>Status</td>
                 <td>Penerima Bagian Arsip</td>
                 <td class="center">Action</td>
              </tr>
			</thead>
			<?php 
		$no = 1;
		foreach($peminjaman as $data):?>
            <tbody>
				<tr>
              	<td class="center"><?php echo $no++ ?></td>
			<td><?php echo $data->nama_peminjam ?></td>
			<td><?php echo $data->berkas_dipinjam ?></td>
			<td><?php echo shortdate_indo($data->tgl_pinjam) ?></td>
			<td><?php echo shortdate_indo($data->tgl_kembali) ?></td>
			<td><?php echo ($data->tujuan) ?></td>
			<td>
<?php
if($data->status=="dikembalikan"){
echo "<span class='label label-success'>Dikembalikan</span>";
}else{
echo "<span class='label label-danger'>Dipinjam</span>";
}
?>
</td>
			<td><?php echo $data->nama_pegawai ?></td>
			<td class="center">
          
        

		<a href="<?php echo base_url().'admin/edit/'.$data->id_peminjaman; ?>" class="btn btn-warning btn-sm"> <i
class="fa fa-pencil"></i> </a>
<a href="<?php echo base_url().'admin/hapus/'.$data->id_peminjaman; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Hapus Data ini ?');"> <i
class="fa fa-trash"></i> </a>
<a href="<?php echo base_url().'admin/tambah_tglkembali/'.$data->id_peminjaman; ?>" class="btn btn-primary btn-sm"> <i
class="fa fa-plus"></i> </a>
<a href="<?php echo base_url().'admin/cetak_persatu/'.$data->id_peminjaman; ?>" class="btn btn-info btn-sm"> <i
class="fa fa-print"></i> </a>
<a href="<?php echo base_url().'admin/detail/'.$data->id_peminjaman; ?>" class="btn btn-success btn-sm"> <i
class="fa fa-eye"></i> </a>
				
                   
			</td>
			</tr>
			</tbody>
			<?php endforeach; ?>
          </table>          
        </div>
        <div class="container center">
      <?php echo $pagination ?>
    </div>
      </div>
    </div>
	 

    

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