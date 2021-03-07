<!DOCTYPE html>
<html lang="en">

<head>



</head>

<body id="page-top">

    
<h2><center>LAPORAN  PEMINJAMAN BERKAS ARSIP PERKARA</center></h2>
<table border="1" width="100%" style="text-align:center;">
          <thead>
			<tr>
                <td class="center">No</td>
                <td>Nama Peminjam</td>
                <td>Berkas yang Dipinjam</td>
                 <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                 <td>Penerima Bagian Arsip</td>
                 
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
			<td><?php echo $data->nama_pegawai ?></td>
			
		</tr>
		</tbody>
		<?php endforeach; ?>
  </table>
  



</body>

</html>
