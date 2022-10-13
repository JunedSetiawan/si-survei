<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<div class="container">
    <div class="hero"><img src="https://lh4.googleusercontent.com/325Iz9QvSx8tYqS1lD11IdISqBK7SAMZ9l_A2XsiQWILPL5cimE8hjEgij1c3IcgMbRBtdP5Yq1BDEw1TtSgQa6NweDV_JgUEIfMai9hMAR49bCC4ndIL5NTt_7rxQ=w787" width="670px"></div>
	<div class="header-title">
	<h2 class="menu-head">
		Survey Kepuasan Masyarakat
	</h2>
	<p>
	Terima Kasih Telah Menilai Pelayanan Kami
	</p>	
	<div class="link">
    <a href="index.php"> Kirim Tanggapan Lain </a>
	</div>	
</div>
</div>
</body>
</html>

<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang
$gender=$_POST["gender"];
$pendidikan=$_POST["pendidikan"];
$pekerjaan=$_POST["pekerjaan"];
$soal1=$_POST["soal1"];
$soal2=$_POST["soal2"];
$soal3=$_POST["soal3"];
$soal4=$_POST["soal4"];
$soal5=$_POST["soal5"];
$soal6=$_POST["soal6"];
$tanggal = date("y-m-d");

//Query input menginput data kedalam tabel barang
  $sql="insert into tb_form (tanggal,gender,pendidikan,pekerjaan,soal1,soal2,soal3,soal4,soal5,soal6) values
        (
        '$tanggal','$gender','$pendidikan','$pekerjaan','$soal1','$soal2','$soal3','$soal4','$soal5','$soal6')";

//Mengeksekusi/menjalankan query diatas 
  $hasil=mysqli_query($kon,$sql);



?>