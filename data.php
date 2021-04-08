<?php
    include 'inc/koneksi.php';
    include 'inc/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="example1" cellpadding="10px;" border="1">
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
				<tbody>
				
					<?php
        
        $sql = $koneksi->query("SELECT * from tb_form");
              $no = 1;
              while ($row= $sql->fetch_assoc()) {
            ?>
            

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $row['tanggal']; ?>
						</td>
						<td>
							<?php echo $row['gender']; ?>
						</td>
						<td>
							<?php echo $row['pendidikan']; ?>
						</td>
						<td>
							<?php echo $row['pekerjaan']; ?>
						</td>
						<td>
							<?php echo $row['soal1']; ?>
						</td>
						<td>
							<?php echo $row['soal2']; ?>
						</td>
						<td>
							<?php echo $row['soal3']; ?>
						</td>
						<td>
							<?php echo $row['soal4']; ?>
						</td>
						<td>
							<?php echo $row['soal5']; ?>
						</td>	
						<td>
							<?php echo $row['soal6']; ?>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
			</div>
				</tfoot>
			</table>
</body>
</html>