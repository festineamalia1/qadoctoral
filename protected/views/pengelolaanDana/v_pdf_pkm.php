<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 7px;
	}
	table tr td{
		border: thin solid black;
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
<?php
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
?>

<p style="text-align:center;font-weight:bold;">
	<p>7.2.1 Tuliskan jumlah kegiatan Pelayanan/Pengabdian kepada Masyarakat (*) yang sesuai
	dengan bidang keilmuan PS selama tiga tahun terakhir yang dilakukan oleh dosen tetap
	yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut :</p><br>
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Sumber Dana Kegiatan</th>
			<th>TS-2</th>
			<th>TS-1</th>
			<th>TS</th>
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
									?>
										<td style="text-align:center"><?=$value['waktu_TS2']?></td>
										<td style="text-align:center"><?=$value['waktu_TS1']?></td>
										<td style="text-align:center"><?=$value['waktu_TS']?></td>
									</tr>
									<?
								}
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
									?>
										<td style="text-align:center"><?=$value['waktu_TS2']?></td>
										<td style="text-align:center"><?=$value['waktu_TS1']?></td>
										<td style="text-align:center"><?=$value['waktu_TS']?></td>
									</tr>
									<?
								}
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
									?>
										<td style="text-align:center"><?=$value['waktu_TS2']?></td>
										<td style="text-align:center"><?=$value['waktu_TS1']?></td>
										<td style="text-align:center"><?=$value['waktu_TS']?></td>
									</tr>
									<?
								}
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
									?>
										<td style="text-align:center"><?=$value['waktu_TS2']?></td>
										<td style="text-align:center"><?=$value['waktu_TS1']?></td>
										<td style="text-align:center"><?=$value['waktu_TS']?></td>
									</tr>
									<?
								}
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
									?>
										<td style="text-align:center"><?=$value['waktu_TS2']?></td>
										<td style="text-align:center"><?=$value['waktu_TS1']?></td>
										<td style="text-align:center"><?=$value['waktu_TS']?></td>
									</tr>
									<?
								}
							}
							?>
							

	</tbody>
</table>
<p class="keterangan">
	Catatan : (*) Pelayanan atau Pengabdian kepada Masyarakat adalah penerapan bidang ilmu untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb).
</p>
<p>7.2.2 Adakah mahasiswa yang dilibatkan dalam kegiatan pelayanan/pengabdian kepada masyarakat
dalam tiga tahun terakhir?</p>
		<div style="margin-left:30px;">
				<label class="checkbox inline">
					<input type="checkbox" id="" value="option2" disabled 
					<?
						foreach ($pkm as $key => $value) {
					?>
						<?=($value['mhs_terlibat'] == 'tidak ada')? 'checked': ''?>
					<?
						}
					?>
					> Tidak
				</label> <br>
				<label class="checkbox inline">
					<input type="checkbox" id="" value="option2" disabled 
					<?
						foreach ($pkm as $key => $value) {
					?>
						<?=($value['mhs_terlibat'] == 'ada')? 'checked': ''?>
					<?
						}
					?>
					> Ya
				</label>
		</div><br>
Jika Ya, jelaskan tingkat partisipasi dan bentuk keterlibatan mahasiswa dalam pelayanan/pengabdian kepada masyarakat.
<p style="border:1px solid black;padding:5px;">
	<?
		foreach ($pkm as $key => $value) {
	?>
		<?=$value['wujud_mhs_pkm']?>
	<?
		}
	?>
</p><br>
<?
//}
?>
