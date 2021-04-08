<div style="width: 700px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
</div>

<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			render: 'precentage',
			data: {
				labels: ["Laki-laki", "Perempuan"],
				datasets: [{
					
					label: '',
					data: [
					<?php 
					$jumlah_laki = mysqli_query($koneksi,"select * from tb_form where gender='Laki-Laki'");
					echo mysqli_num_rows($jumlah_laki);
					?>, 
					<?php 
					$jumlah_perempuan = mysqli_query($koneksi,"select * from tb_form where gender='Perempuan'");
					echo mysqli_num_rows($jumlah_perempuan);
					?>
					],
					backgroundColor: [
					'rgba(255, 37, 46, 0.2)',
					'rgba(54, 190, 255, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>