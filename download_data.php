<?php
    header("Content-type: application/vnd-ms-excel");
     
    // membuat nama file ekspor "export-to-excel.xls"
    header("Content-Disposition: attachment; filename=Data Survei.xls");
//fetch_data.php
$connect = new PDO("mysql:host=localhost;dbname=db_form", "root", "");
include_once('inc/config.php');
	include ('inc/koneksi.php');

	
	$query = "
		SELECT * FROM tb_form WHERE id_form != ''
	";
	if (!empty($_POST['fromDate']) && !empty($_POST['toDate'])) {		
	    $fromDate = $_POST['fromDate'];
	    $toDate   = $_POST['toDate'];
	    $query = "SELECT * FROM tb_form WHERE tanggal BETWEEN '{$fromDate}' AND '{$toDate}' ";
	}
	if(isset($_POST["pendidikan"])) 
	{
		$pendidikan = implode("','", $_POST["pendidikan"]);
		$query .= " AND pendidikan IN('".$pendidikan."')";
	}
	if(isset($_POST["pekerjaan"]))
	{
		$pekerjaan = implode("','", $_POST["pekerjaan"]);
		$query .= "
		 AND pekerjaan IN('".$pekerjaan."')
		";
	}
	if(isset($_POST["gender"]))
	{
		$gender = implode("','", $_POST["gender"]);
		$query .= "
		 AND gender IN('".$gender."')
		";
	}
	if(isset($_POST["soal1"]))
	{
		$soal1 = implode("','", $_POST["soal1"]);
		$query .= "
		 AND soal1 IN('".$soal1."')
		";
	}
	if(isset($_POST["soal2"]))
	{
		$soal2 = implode("','", $_POST["soal2"]);
		$query .= "
		 AND soal2 IN('".$soal2."')
		";
	}
	if(isset($_POST["soal3"]))
	{
		$soal3 = implode("','", $_POST["soal3"]);
		$query .= "
		 AND soal3 IN('".$soal3."')
		";
	}
	if(isset($_POST["soal4"]))
	{
		$soal4 = implode("','", $_POST["soal4"]);
		$query .= "
		 AND soal4 IN('".$soal4."')
		";
	}
	if(isset($_POST["soal5"]))
	{
		$soal5 = implode("','", $_POST["soal5"]);
		$query .= "
		 AND soal5 IN('".$soal5."')
		";
	}
	if(isset($_POST["soal6"]))
	{
		$soal6 = implode("','", $_POST["soal6"]);
		$query .= "
		 AND soal6 IN('".$soal6."')
		";
	}
	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$result = mysqli_query($conn, $query);
	$no=1;
	$output = '
	<table id="example1" border="1">
	<thead>
	
		<tr>
			<th>No</th>
			<th>tanggal</th>
			<th>Gender</th>
			<th>Pendidikan</th>
			<th>Pekerjaan</th>
			<th>Query1</th>
			<th>Query2</th>
			<th>Query3</th>
			<th>Query4</th>
			<th>Query5</th>
			<th>Query6</th>
		</tr>
	</thead>
	<tbody>';
	if($total_row  > 0)
	{
		if (mysqli_num_rows($result) > 0) {
		foreach($result as $row)
			{
				$output .= '
			<tr>
				<td>'.$no++.'</td>
				<td>'.$row["tanggal"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["pendidikan"].'</td>
				<td>'.$row["pekerjaan"].'</td>
				<td>'.$row["soal1"].'</td>
				<td>'.$row["soal2"].'</td>
				<td>'.$row["soal3"].'</td>
				<td>'.$row["soal4"].'</td>
				<td>'.$row["soal5"].'</td>
				<td>'.$row["soal6"].'</td>
			</tr>
				';
			}
		}
	}
	else
	{
		$output .= '<tr>
					<td colspan="12" align="center">No Data Found</td>
				</tr>';
	}
	$output .= '
	</tbody>
			</table>
	';
	echo $output;
