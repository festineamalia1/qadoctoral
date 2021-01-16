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
		padding: 10px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
	
</style>

		<p>
				4.2 Tuliskan data tenaga kependidikan yang ada di Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut:
			</p>
			<table class="table table-bordered">		
						<tr>
							<th rowspan="2">No</th>	
							<th rowspan="2">Jenis Tenaga Kependidikan</th>
							<th rowspan="1" colspan="8">Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</th>
							<th rowspan="2">Unit Kerja</th>
						</tr>
						<tr>
							<th rowspan="1">S3</th>
							<th rowspan="1">S2</th>	
							<th rowspan="1">S1</th>
							<th rowspan="1">D4</th>	
							<th rowspan="1">D3</th>
							<th rowspan="1">D2</th>	
							<th rowspan="1">D1</th>
							<th rowspan="1">SMA/SMK</th>
						</tr>
						<tr>
							<?
							$i=0;

							$tot_jumS3=0;
							$tot_jumS2=0;
							$tot_jumS1=0;

							$tot_jumD4=0;
							$tot_jumD3=0;
							$tot_jumD2=0;
							$tot_jumD1=0;

							$tot_jumSMA=0;
							$tot_jumSMK=0;

							foreach ($data as $key => $value) {
								$i++;
							?>
							<tr>
									<td style="text-align:center"><?=$i?></td>	 
									<td><?=$value['jenis_tenaga']?></td>
									<td style="text-align:center"><?=$value['jumS3']?></td>
									<td style="text-align:center"><?=$value['jumS2']?></td>	
									<td style="text-align:center"><?=$value['jumS1']?></td>	
									<td style="text-align:center"><?=$value['jumD4']?></td>	
									<td style="text-align:center"><?=$value['jumD3']?></td>
									<td style="text-align:center"><?=$value['jumD2']?></td>	
									<td style="text-align:center"><?=$value['jumD1']?></td>	
									<td style="text-align:center"><?=$value['jumSMA']?>/<?=$value['jumSMK']?></td>
									<td style="text-align:center"><?=$value['unit_kerja']?></td>		
							</tr>
							<?php

							$tot_jumS3 +=$value['jumS3'];
							$tot_jumS2 +=$value['jumS2'];
							$tot_jumS1 +=$value['jumS1'];

							$tot_jumD4 +=$value['jumD4'];
							$tot_jumD3 +=$value['jumD3'];
							$tot_jumD2 +=$value['jumD2'];
							$tot_jumD1 +=$value['jumD1'];

							$tot_jumSMA +=$value['jumSMA'];
							$tot_jumSMK +=$value['jumSMK'];
							}
							?>	
						<tr>
							<th rowspan="1" colspan="2">Total</th>
							<th rowspan="1" colspan="1"><?=$tot_jumS3?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumS2?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumS1?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumD4?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumD3?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumD2?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumD1?></th>
							<th rowspan="1" colspan="1"><?=$tot_jumSMA?>/<?=$tot_jumSMK?></th>
							<th rowspan="1" colspan="1"></th>
						</tr>	  	
			</table>
				*Hanya yang memiliki pendidikan formal dalam bidang perpustakaan
			</p>
			<br>
			<p>
				Uraiakan pandangan Fakultas tentang data di atas yang mencakup aspek: kecukupan, dan kualifikasi.
				Jelaskan kendala yang ada dalam pengembangan tenaga kependidikan.
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?=$value['F_pandangan_fakultas']?>
			<p>