<?php
		
	// Include database connectivity
	
	include_once('inc/config.php');

	if (!empty($_POST['fromDate']) && !empty($_POST['toDate'])) {		
	    $fromDate = $_POST['fromDate'];
	    $toDate   = $_POST['toDate'];
	    $query = "SELECT * FROM tb_form WHERE date BETWEEN '{$fromDate}' AND '{$toDate}'";
	}else{
	    $query = "SELECT * FROM tb_form ORDER BY id_form ASC";
	}

	$result = mysqli_query($conn, $query);
    $no=1;
	$output = "";

	if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {
			
    	       $output.="<tr>
               <td>".$no++."</td>
               <td>".$row["date"]."</td>
               <td>".$row["gender"]."</td>
               <td>".$row["pendidikan"]."</td>
               <td>".$row["pekerjaan"]."</td>
               <td>".$row["soal1"]."</td>
               <td>".$row["soal2"]."</td>
               <td>".$row["soal3"]."</td>
               <td>".$row["soal4"]."</td>
               <td>".$row["soal5"]."</td>
               <td>".$row["soal6"]."</td>
           </tr>";
		}
		echo $output;
	}else{
		echo "<h3>No record found</h3>";
	}
?>