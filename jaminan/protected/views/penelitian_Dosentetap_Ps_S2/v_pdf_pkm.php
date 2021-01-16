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
		padding: 7px;
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


<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA MASYARAKAT, DAN KERJASAMA
</p>
<p>
7.2   Kegiatan Pelayanan/Pengabdian kepada Masyarakat (PkM) dalam Tiga Tahun Terakhir
</p>
<p>7.2.1  Tuliskan jumlah kegiatan pelayanan/pengabdian kepada masyarakat (*) yang sesuai dengan bidang keilmuan PS yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS dalam tiga tahun terakhir dengan mengikuti format tabel berikut:</p><br>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<table class="table table-bordered min ">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Tahun Pelaksanaan</th>
				<th rowspan="1" colspan="4">Jumlah Penelitian Dalam  Tahun Pelaksanaan</th>

			</tr>
			<tr>
				<th colspan="1">TS-2</th>
				<th colspan="1">TS-1</th>
				<th colspan="1">TS</th>
				<th colspan="2">Jumlah Kegiatan </th>

			</tr>

			<tr>
			<th>(1)</th>
			<th>(2)</th>
			<th>(3)</th>
			<th>(4)</th>
			<th>(5)</th>
		</tr>
		</thead>
		<tbody>
		<?
		if(isset($data['sendiri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['sendiri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center"><?=$i?></td>
						<td rowspan="<?=$rowspan?>">Pembiayaan sendiri oleh peneliti</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
							$jumlah=$value['waktu_ts2']+$value['waktu_ts1']+$value['waktu_ts'];
						?>
							<td style="text-align:center"><?=$value['waktu_ts2']?></td>
							<td style="text-align:center"><?=$value['waktu_ts1']?></td>
							<td style="text-align:center"><?=$value['waktu_ts']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
						</tr>
						<?
					}
		}else{
			?>
			<tr>
				<td style="text-align:center">1</td>
				<td>Pembiayaan sendiri oleh peneliti</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>

		<?
		if(isset($data['pt'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['pt'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">2</td>
						<td rowspan="<?=$rowspan?>">PT yang bersangkutan</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
							$jumlah=$value['Ts2']+$value['Ts1']+$value['Ts0'];
						?>
							<td style="text-align:center"><?=$value['Ts2']?></td>
							<td style="text-align:center"><?=$value['Ts1']?></td>
							<td style="text-align:center"><?=$value['Ts0']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
						</tr>
						<?
					}
		}else{
			?>
			<tr>
				<td style="text-align:center">2</td>
				<td>PT yang bersangkutan</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>

		<?
		if(isset($data['depdiknas'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['depdiknas'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">3</td>
						<td rowspan="<?=$rowspan?>">Depdiknas</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
							$jumlah=$value['waktu_ts2']+$value['waktu_ts1']+$value['waktu_ts'];
						?>
							<td style="text-align:center"><?=$value['waktu_ts2']?></td>
							<td style="text-align:center"><?=$value['waktu_ts1']?></td>
							<td style="text-align:center"><?=$value['waktu_ts']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
						</tr>
						<?
					}
		}else{
			?>
			<tr>
				<td style="text-align:center">3</td>
				<td>Depdiknas</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>

		<?
		if(isset($data['dlm negeri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['dlm negeri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">4</td>
						<td rowspan="<?=$rowspan?>">Institusi dalam negeri di luar Depdiknas</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
							$jumlah=$value['waktu_ts2']+$value['waktu_ts1']+$value['waktu_ts'];
						?>
							<td style="text-align:center"><?=$value['waktu_ts2']?></td>
							<td style="text-align:center"><?=$value['waktu_ts1']?></td>
							<td style="text-align:center"><?=$value['waktu_ts']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
						</tr>
						<?
					}
		}else{
			?>
			<tr>
				<td style="text-align:center">4</td>
				<td>Institusi dalam negeri di luar Depdiknas</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>

		<?
		if(isset($data['luar negeri'])){
			$i = 0;
			$rowspan = 0;
			foreach ($data['luar negeri'] as $key => $value) {
				?>
				<tr>
				<?
				$i++;
				if($i == 1){
						?>
						<td style="text-align:center">5</td>
						<td rowspan="<?=$rowspan?>">Institusi luar negeri</td>
						<?
					}else{
						?>
						<td></td>
						<td></td>
						<?
					}
							$jumlah=$value['waktu_ts2']+$value['waktu_ts1']+$value['waktu_ts'];
						?>
							<td style="text-align:center"><?=$value['waktu_ts2']?></td>
							<td style="text-align:center"><?=$value['waktu_ts1']?></td>
							<td style="text-align:center"><?=$value['waktu_ts']?></td>
							<td style="text-align:center"><?=$jumlah?></td>
						</tr>
						<?
					}
		}else{
			?>
			<tr>
				<td style="text-align:center">5</td>
				<td>Institusi luar negeri</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
				<td style="text-align:center">-</td>
			</tr>
			<?
		}
		?>
	</tbody>
</table>
<p class="keterangan">
	Catatan: (*) Pelayanan/pengabdian kepada masyarakat adalah penerapan bidang ilmu untuk membantu menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)
</p>
<?php } ?>