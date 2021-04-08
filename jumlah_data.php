<?php
include 'inc/koneksi.php';
include 'inc/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data SURVEI DPMTPSP</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>
		body {
			overflow-x :hidden;
		}
        table {
            margin :20px;
        }
        thead {
            box-shadow:1px 1px 4px 2px #ddd;
            line-height:15px;
        }
		.bungkus {
			margin-left:40px;
		}
    </style>
</head>
<body>
<a class="btn btn-link" href="index.php">Kembali</a>
<h3 class="text-center"><b> Jumlah Data Survei PerOrangan </b></h3>
<div class="bungkus">
<div class="row">
<table cellpadding="17px">
<thead class="awal">
<tr>
<th>Gender</th>  
<td>laki-laki</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE gender='Laki-Laki'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Perempuan</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE gender='Perempuan'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>

<tr>
<th>Pendidikan</th>  
<td>SD</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='SD'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>SMP</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='SMP'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>SMA</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='sma'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Diploma</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='diploma'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>S1</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='S1'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>S2</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='S2'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>S3</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='S3'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Lainnya</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pendidikan='lainnya'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
</thead>
</table>
<table cellpadding="17px"> 
<thead class="awal">
<tr>
<th>Pekerjaan</th>  
<td>PNS</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pekerjaan='PNS'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>TNI/POLRI</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pekerjaan='TNI/POLRI'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Karyawan Swasta</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pekerjaan='Karyawan Swasta'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Wiraswasta</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pekerjaan='Wiraswasta'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Lainnya</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE pekerjaan='Lainnya'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>

<tr>
<th>Query 1</th>  
<td>Ya, Mudah dan Cepat</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal1='Ya, Mudah dan Cepat'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Tidak, Sulit dan Lambat</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal1='Tidak, Sulit dan Lambat'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>

<tr>
<th>Query 2</th>  
<td>Kompeten</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal2='Kompeten'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Kurang Kompeten</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal2='Kurang Kompeten'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>

<tr>
<th>Query 3</th>  
<td>Sesuai / Gratis</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal3='Sesuai / Gratis'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Tidak Sesuai</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal3='Tidak Sesuai'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
</thead>
</table>
<table cellpadding="17px"> 
<thead class="awal">
<tr>
<th>Query 4</th>  
<td>Ada</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal4='Ada'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Tidak Ada</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal4='Tidak Ada'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th>Query 5</th>  
<td>Sudah Memadai</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal5='Sudah Memadai'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Belum Memadai</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal5='Belum Memadai'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th>Query 6</th>  
<td>Sudah Diterapkan</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal6='Sudah Diterapkan'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
<tr>
<th></th>  
<td>Belum Diterapkan</td>  
<td>:</td>  
<td><?php
		$data_barang = mysqli_query($koneksi,"SELECT * FROM tb_form WHERE soal6='Belum Diterapkan'");
		$jumlah_barang = mysqli_num_rows($data_barang);
	?>
    <b><i class="far fa fa-user"> <?php echo $jumlah_barang; ?> </i></b>
</td>  
</tr>
</thead>
</table>
</div>
</div>
</body>
<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
</html>