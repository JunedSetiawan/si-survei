<?php
include "koneksi.php";
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>

<body>
	<div class="container">
		<div class="hero">
			<img src="logo.png" width="670px">
		</div>
		<div class="header-title">
			<h2 class="menu-head">
				Survey Kepuasan Masyarakat
			</h2>
			<p>
				Sebagai Evaluasi Pelayanan kami, mohon untuk dapat mengisi survey kepuasan masyarakat
			</p>
			<p class="wajib">
				* Wajib
			</p>
		</div>
		<form action="proses_kirim.php" method="POST">
			<?php

			$sql = $kon->query("SELECT * from tb_soal");
			while ($row = $sql->fetch_assoc()) {
			?>
				<div class="content">
					<div class="title-content">Jenis Kelamin <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="gender" value="Laki-Laki" required="" />
							<label class="label">Laki-Laki</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="gender" value="Perempuan" required="" />
							<label class="label">Perempuan</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content">Pendidikan <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="pendidikan" value="SD" required="" />
							<label class="label">SD</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="SMP" required="" />
							<label class="label">SMP</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="SMA" required="" />
							<label class="label">SMA</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="Diploma" required="" />
							<label class="label">Diploma</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="S1" required="" />
							<label class="label">S1</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="S2" required="" />
							<label class="label">S2</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="S3" required="" />
							<label class="label">S3</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pendidikan" value="Lainnya" required="" />
							<label class="label">Lainnya</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content">Pekerjaan <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="pekerjaan" value="PNS" required="" />
							<label class="label">PNS</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pekerjaan" value="TNI/POLRI" required="" />
							<label class="label">TNI/POLRI</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pekerjaan" value="KARYAWAN SWASTA" required="" />
							<label class="label">KARYAWAN SWASTA</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pekerjaan" value="WIRASWASTA" required="" />
							<label class="label">WIRASWASTA</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="pekerjaan" value="LAINNYA" required="" />
							<label class="label">LAINNYA</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query1']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal1" value="Ya, Mudah dan Cepat" required="" />
							<label class="label">Ya, Mudah dan Cepat</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal1" value="Tidak, Sulit dan Lambat" required="" />
							<label class="label">Tidak, Sulit dan Lambat </label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query2']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal2" value="Kompeten" required="" />
							<label class="label">Kompeten</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal2" value="Kurang Kompeten" required="" />
							<label class="label">Kurang Kompeten</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query3']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal3" value="Sesuai / Gratis" required="" />
							<label class="label">Sesuai / Gratis</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal3" value="Tidak Sesuai" required="" />
							<label class="label">Tidak Sesuai</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query4']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal4" value="Ada" required="" />
							<label class="label">Tidak Ada</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal4" value="Tidak Ada" required="" />
							<label class="label">Ada</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query5']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal5" value="Sudah Memadai" required="" />
							<label class="label">Sudah Memadai</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal5" value="Belum Memadai" required="" />
							<label class="label">Belum Memadai</label><br />
						</div>
					</div>
				</div>

				<div class="content">
					<div class="title-content"> <?php echo $row['query6']; ?> <span>*</span></div>
					<div class="menu-content">
						<div class="radio">
							<input type="radio" name="soal6" value="Sudah Diterapkan" required="checked" />
							<label class="label">Sudah Diterapkan</label><br />
						</div>
						<div class="radio">
							<input type="radio" name="soal6" value="Belum Diterapkan" required="" />
							<label class="label">Belum Diterapkan</label><br />
						</div>
					</div>
				</div>
			<?php
			}
			?>
			<button type="submit" name="submit" href="kirim.php">Kirim</button>
		</form>
		<div class="footer">
			<p><a target="_blank" href="https://dpmptsp.ponorogo.go.id">DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</a> |
				<span><b>By </b></span><span><a href="github.com/JunedSetiawan">JunedSetiawan</a> 2021 </span>
			</p>
		</div>
	</div>
</body>

</html>