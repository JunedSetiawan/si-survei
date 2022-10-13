<!DOCTYPE html>
<html>

<head>
	<title>Registrasi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="dist/img/logo.png">
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-edit"></i> Tambah Data
			</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data" name="Simpan">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama User</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Nama user" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-6">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
					</div>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="login.php" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
		</form>
	</div>
</body>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Alert -->
<script src="plugins/alert.js"></script>

</html>
<?php

include "inc/koneksi.php";

if (isset($_POST['Simpan'])) {
	//mulai proses simpan data
	$sql_simpan = "INSERT INTO tb_pengguna (nama_pengguna,username,password,level) VALUES (
        '" . $_POST['nama_pengguna'] . "',
        '" . $_POST['username'] . "',
        '" . $_POST['password'] . "',
        '" . "User" . "')";
	$query_simpan = mysqli_query($koneksi, $sql_simpan);
	mysqli_close($koneksi);

	if ($query_simpan) {
		echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'login.php';
          }
      })</script>";
	} else {
		echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'regis.php';
          }
      })</script>";
	}
}
     //selesai proses simpan data
