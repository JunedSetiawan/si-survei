<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Survei</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
		<select name="gender"> 
			<option value="laki-laki">laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Gender</th>
						<th>Pendidikan</th>
						<th>Pekerjaan</th>
						<th>Query1</th>
						<th>Query2</th>
						<th>Query3</th>
						<th>Query4</th>
						<th>Query5</th>
						<th>Query6</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * from tb_form");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['date']; ?>
						</td>
						<td>
							<?php echo $data['gender']; ?>
						</td>
						<td>
							<?php echo $data['pendidikan']; ?>
						</td>
						<td>
							<?php echo $data['pekerjaan']; ?>
						</td>
						<td>
							<?php echo $data['soal1']; ?>
						</td>
						<td>
							<?php echo $data['soal2']; ?>
						</td>
						<td>
							<?php echo $data['soal3']; ?>
						</td>
						<td>
							<?php echo $data['soal4']; ?>
						</td>
						<td>
							<?php echo $data['soal5']; ?>
						</td>
						<td>
							<?php echo $data['soal6']; ?>
						</td>
						<td>
							<a href="?page=del-pegawai&kode=<?php echo $data['id_form']; ?>" onclick="return confirm('Apakah and	a yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
							<i class="fa fa-trash"></i></a>
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
	<!-- /.card-body -->