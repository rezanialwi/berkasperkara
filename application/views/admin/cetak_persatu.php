<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compitable" content="IE=edge">
	<title>Bukti Pengajuan Permohonan Informasi</title>
	<link rel="stylesheet" type="text/css" href="">

	<!-- <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
		.table.table-bordered{
			border:1px solid black;
		}

		.table.table-bordered > thead > tr > th {
			border:1px solid black;
		}
		.table.table-bordered > tbody > tr > td{
			border:1px solid black;
		}

		.tag1 
		{
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
	  }

	  /* body{
		width:99%;
    	 height: 99%;
		 border: 2px solid black;
	  } */

	  .tandatangan{
    text-align:center; 
	width:425px;
	float:left;
	font-weight: bold;
}

.tandatangan2{
    text-align:center; 
	margin-left:545px;
	font-weight: bold;
}
	</style>
</head>
<body onload="window.print()">
	<table style="width: 100%;">
		<tr>
				<img src="<?php echo base_url().'assets/images/gallery/logo.png'?>" style="position: absolute; width: 60px; height: auto;">
				<td align="center">
			
				<span style="line-height: 1.6; font-weight: bold; font-size: 20px; align-content: center;">&nbsp;
				PENGADILAN NEGERI BANJARMASIN KELAS I A
				</span>
				<br>
				<span style="line-height: 1.6; font-weight: normal; font-size: 18px">
					Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Provinsi Kalimantan Selatan 70114
 					<br>Telp Fax. 0511-3352859 & 3353263
 					<br><u>E-MAIL: pn_bjm@yahoo.com</u>
					 <br><u>Website : www.pn-banjarmasin.go.id</u>
				</span>
			<br><br>
			</td>
		</tr>
	</table>

	<hr class="line-title">
	<p align="center" style="font-weight: bold; font-size: 18px;">
		FORMULIR PEMINJAMAN BERKAS <br>
        <br>
        
	</p>
    <section class="center">
    
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr align="center">
              
                <th >Nama Peminjam</th>
                <th >Nomor Berkas Perkara yang Dipinjam</th>
                <th >Keperluan</th>
				<th >Keterangan Disetujui/Tidak Disetujui</th>
              </tr>
			</thead>		
            <tbody>
				<tr align="center">
				<td><?php echo $detail->nama_peminjam ?></td>
				<td><?php echo $detail->berkas_dipinjam ?></td>
				<td><?php echo $detail->tujuan ?></td>
				<td>Ketua PN Bjm
                <br> <br> <br> <br>
                Panitera<br>  <br> <br> <br>
                Panmud Hukum<br> <br> <br><br></td>
			</tr>
			</tbody>
			
          </table>                            
                            </section>
							<br>
				<section >		
        	<!-- <p style="font-weight: bold; width:325px;float:left;">
							Petugas<br>
                            Informasi
						</p>
						<br><br><br><br><br>
						<p style="font-weight: bold; width:325px;float:left;">
						Agus Setiadi, SH
						</p>

							<p style="font-weight: bold; text-align: right;">
							Pemohon<br>
                            Informasi
						</p>
						<br><br><br><br><br>
						<p style="font-weight: bold; text-align: right;">
						<?php echo $detail->nama ?>
						</p>	 -->
		<div class="tandatangan" >
<br/>
<br/>
<br/>
    <b>Petugas<br>
     Arsip</b><br/>
  <br/><br/><br/><br/>
   Alfiandri Togatorop, A.Md
</div>
<p style="font-weight: bold; text-align: right;">
							Banjarmasin, ...................20...						</p>
						

<div class="tandatangan2">
    <br/>
   Peminjam<br/><br/><br/><br/>
  <br />
<br/>
   <?php echo $detail->nama_peminjam ?>
</div>
        
	</section>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
			<script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

</script>					
					
						
						
                    
						

</body>
</html>