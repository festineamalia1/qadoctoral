<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 8px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		margin-bottom: 15px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<?
if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada.
	</div>
<?
} else {
?>
	<p>5.3 Penelitian Disertasi</p>
	<p>5.3.1 Jelaskan sistem pembimbingan penelitian disertasi pada program studi ini, mencakup informasi tentang: </p>

	<td>1. Kebijakan Pembimbingan</td>
	<?php
		if(empty($proses['kebijakan_pembimbingan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?php
			
			//foreach ($proses as $key => $value) {
				echo"<p>".$proses['kebijakan_pembimbingan']."</p>";
			//}
			?>
						</div>
		<?php } ?>

		<br>

		<td>2. Mekanisme penunjukan pembimbing (sebagai promotor, kopromotor, anggota) dan mahasiswa bimbingan</td>
		<?php
		if(empty($proses['mekanisme_penunjukkan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?php
			
			//foreach ($proses as $key => $value) {
				echo"<p>".$proses['mekanisme_penunjukkan']."</p>";
			//}
			?>
						</div>
		<?php } ?>

		<td>3. Proses Pembimbingan</td>
		<?php
		if(empty($proses['proses_pembimbingan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?php
			
			//foreach ($proses as $key => $value) {
				echo"<p>".$proses['proses_pembimbingan']."</p>";
			//}
			?>
						</div>
		<?php } ?>

	<br>	




	

	<p>5.3.2 Tuliskan nama dosen pembimbing penelitian disertasi dan jumlah mahasiswa yang dibimbingnya pada TS dengan mengikuti format tabel berikut: </p>
	<?php
	if((empty($data))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered">
			<thead>
			<tr>
				<th rowspan="2">No.</th>
				<th rowspan="2">Nama Dosen Pembimbing Akademik</th>
				<th rowspan="2">Jabatan Akademik Dosen</th>

				<th rowspan="1" colspan="3">Banyaknya Mahasiswa yang Dibimbing dan Status Pembimbing</th>
			</tr>
			<tr>
				<th>Promotor</th>
				<th>Kopromotor</th>
				<th>Anggota</th>
			</tr>

		</thead>
<tbody>
			<!--<?
			$i = 0;
			$total = 0;
			$rata = 0;
			foreach ($data as $key => $value) {
				$i++;
				$rata += $value['rata_penyelesaian'];
				$total += $value['jml_ketua'];
				?>-->
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:left;"><?=$value['nama_dosen']?>, <?=$value['gelar_akademik']?></td>
					<td style="text-align:center;"><?=$value['jabatan_dosen']?></td>
					<td style="text-align:center;"><?=$value['jml_promotor']?></td>
					<td style="text-align:center;"><?=$value['jml_kopromotor']?></td>
					<td style="text-align:center;"><?=$value['jml_anggota']?></td>

				</tr>
				<?
			}
			?>
			<tr>
				<td colspan="2" style="text-align:center;">Total</td>
				<td style="background:#333;"></td>
				<td style="text-align:center;"><?=$total?></td>
				<td style="text-align:center;"><?=$total?></td>
				<td style="text-align:center;"><?=$total?></td>
			</tr>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	
			

<?
}
?>