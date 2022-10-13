<?php
session_start();
include '../../inc/koneksi.php';
include '../../inc/config.php';

$data_nama = $_SESSION["ses_nama"];
$data_level = $_SESSION["ses_nama"];
$sql = $koneksi->query("SELECT * from tb_profil");
while ($data = $sql->fetch_assoc()) {

	$nama = $data['nama_profil'];
}
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
	<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="../../dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="../../plugins/alert.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars text-white"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<font color="#eee">
							<b>
								<?php echo $nama; ?>
							</b>
						</font>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="../../dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> DATA SURVEI</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="../../dist/img/user.png" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-item">
							<a href="../../index.php" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Survei
								</p>
							</a>
						</li>
						<?php if ($data_level == "Admin") { ?>
							<li class="nav-item">
								<a href="../../jumlah_data.php" class="nav-link">
									<i class="nav-icon far fa fa-users"></i>
									<p>
										Jumlah Data
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="admin/penggona/data_pengguna.php" class="nav-link">
									<i class="nav-icon far fa fa-users"></i>
									<p>
										Data Pengguna
									</p>
								</a>
							</li>

							<li class="nav-item">
								<a href="../../filter.php" class="nav-link">
									<i class="nav-icon far fa fa-download"></i>
									<p>
										Unduh
									</p>
								</a>
							</li>
						<?php } ?>

						<li class="nav-link"></li>
						<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="../../logout.php" class="nav-link">
							<i class="nav-icon far fa-circle text-danger"></i>
							<p>
								Logout
							</p>
						</a>
						</li>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<?php
					if (isset($_GET['page'])) {
						$hal = $_GET['page'];

						switch ($hal) {

								//Asrama
							case 'add-pengguna':
								include "add_pengguna.php";
								break;
							case 'edit-pengguna':
								include "edit_pengguna.php";
								break;
							case 'del-pengguna':
								include "del_pengguna.php";
								break;
							case 'del-survei':
								include "admin/survei/del_survei.php";
								break;


								//default
							default:
								echo "<center><h1> ERROR !</h1></center>";
								break;
						}
					}
					?>
				</div>
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-table"></i> Data User
						</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive">
							<div>
								<a href="?page=add-pengguna" class="btn btn-primary">
									<i class="fa fa-edit"></i> Tambah Data</a>
							</div>
							<br>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama User</th>
										<th>Username</th>
										<th>Level</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$no = 1;
									$sql = $koneksi->query("select * from tb_pengguna");
									while ($data = $sql->fetch_assoc()) {
									?>

										<tr>
											<td>
												<?php echo $no++; ?>
											</td>
											<td>
												<?php echo $data['nama_pengguna']; ?>
											</td>
											<td>
												<?php echo $data['username']; ?>
											</td>
											<td>
												<?php echo $data['level']; ?>
											</td>
											<td>
												<a href="?page=edit-pengguna&kode=<?php echo $data['id_pengguna']; ?>" title="Ubah" class="btn btn-success btn-sm">
													<i class="fa fa-edit"></i>
												</a>
												<a href="?page=del-pengguna&kode=<?php echo $data['id_pengguna']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
													<i class="fa fa-trash"></i>
													</>
											</td>
										</tr>

									<?php
									}
									?>
								</tbody>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<!-- /.card-body -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="https://dpmptsp.ponorogo.go.id/">
					<strong>DPMPTSP</strong>
				</a>
				2021 All rights reserved.
			</div>
			<b>Created 2021</b>
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="../../js/jquery-1.10.2.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="../../plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="../../plugins/datatables/jquery.dataTables.js"></script>
	<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="../../dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="../../dist/js/demo.js"></script>
	<!-- page script -->
	<script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script type="text/javascript" src="../../chart/chart.js"></script>
	<script src="../../js/filter.js"></script>
</body>

</html>