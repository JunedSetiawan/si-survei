<?php
 //Mulai Sesion
 session_start();
 if (isset($_SESSION["ses_username"])==""){
 header("location: login.php");
 
 }else{
   $data_nama = $_SESSION["ses_nama"];
 }

    //KONEKSI DB
	include "inc/koneksi.php";
	$connect = new PDO("mysql:host=localhost;dbname=db_form", "root", "");

    $sql = $koneksi->query("SELECT * from tb_profil");
	while ($data= $sql->fetch_assoc()) {
	
	$nama=$data['nama_profil'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container .content .card-body .table-responsive{
            overflow: hidden;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				<img src="dist/img/logo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text"> DATA SURVEI</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-2 pb-2 mb-2 d-flex">
					<div class="image">
						<img src="dist/img/user.png" class="img-circle elevation-1" alt="User Image">
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
							<a href="index.php" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Data Survei
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="jumlah_data.php" class="nav-link">
								<i class="nav-icon far fa fa-users"></i>
								<p>
									Jumlah Data
								</p>
							</a>
						</li>

						<li class="nav-link"></li>
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
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
<div class="container">
<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-filter"></i> Filter Unduh</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
        <form action="download_data.php" method="post">
			<div class="row">
	<div class="col-md-3">
		 <div class="form-group">
			<label>Tanggal</label>
				<input type="text" name="daterange" class="form-control" placeholder="Rentang tanggal" id="tanggal" />      
                <input type="hidden" name="fromDate">
                <input type="hidden" name="toDate">
		</div> 
	</div>			
	<div class="col-md-3">
            <div class="list-group">
					<label>Gender</label>
                    <?php

                    $query = "
                    SELECT DISTINCT gender FROM tb_form ORDER BY gender DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" name="gender[]" class="common_selector gender" value="<?php echo $row['gender']; ?>" > <?php echo $row['gender']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
            </div>
    <div class="col-md-3">
    	<div class="list-group">
					<label>Pendidikan</label>
                    <div style="height: 170px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT pendidikan FROM tb_form ORDER BY pendidikan DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input name="pendidikan[]" type="checkbox" class="common_selector pendidikan" value="<?php echo $row['pendidikan']; ?>"  > <?php echo $row['pendidikan']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
    </div>
    <div class="col-md-3">
    <div class="list-group">
					<label>Pekerjaan</label>
					<div style="height: 170px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "
                    SELECT DISTINCT pekerjaan FROM tb_form ORDER BY pekerjaan DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input name="pekerjaan[]" type="checkbox" class="common_selector pekerjaan" value="<?php echo $row['pekerjaan']; ?>" > <?php echo $row['pekerjaan']; ?></label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</div>
<button type="submit" class="btn btn-info">Download</button>
</form>
</div>
</body>
<!-- jQuery -->
<script src="js/jquery-1.10.2.min.js"></script>
	<!-- Bootstrap 4 -->
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
      $('input[name="daterange"]').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
    fromDate = picker.startDate.format('YYYY-MM-DD');
    toDate = picker.endDate.format('YYYY-MM-DD');
    $('input[name="fromDate"]').val(fromDate);
    $('input[name="toDate"]').val(toDate);
  });

  $('input[name="daterange"]').on('cancel.daterangepicker', function (ev, picker) {
    $(this).val('');
  });

  $('input[name="daterange"]').daterangepicker(
    {
      opens: 'center',
      autoUpdateInput: false,
    },

    // From to To date range function
    function (start, end) {
      var fromDate = start.format('YYYY-MM-DD');
      var toDate = end.format('YYYY-MM-DD');
      //   if(fromDate !== "" && toDate !== "") {
      //     filter_data();
      //   }
    }
  );
    </script>
    </html>