<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
		padding: 5px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-weight: bold;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p class="judul">
	STANDAR 7. PENELITIAN, PELAYANAN/PENGABDIAN KEPADA 
	<p class="judul" style="padding-left:106px">MASYARAKAT, DAN KERJASAMA
</p>
<p>
	7.1   Penelitian
</p>
<p>
		7.1.1 Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing- masing PS di lingkungan Fakultas 
		atau Sekolah Tinggi dalam 3 tahun terakhir dengan mengikuti format tabel berikut :
</p>

<table class="table table-bordered">
				<thead>
					<tr>
						<th rowspan="2" colspan="1">No</th>
						<th rowspan="2" colspan="1">Nama Program Studi</th>
						<th rowspan="1" colspan="3">Jumlah Judul Penelitian</th>
						<th rowspan="1" colspan="3">Total Dana Penelitian (Juta Rp)</th>			
					</tr>
					<tr>
						<th colspan="1">TS-2</th>
						<th colspan="1">TS-1</th>
						<th colspan="1">TS</th>
						<th colspan="1">TS-2</th>
						<th colspan="1">TS-1</th>
						<th colspan="1">TS</th>	
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;

					$tot_judul_TS2=0;
					$tot_judul_TS1=0;
					$tot_judul_TS=0;

					$tot_dana_TS2=0;
					$tot_dana_TS1=0;
					$tot_dana_TS=0;

					foreach ($dana_penelitian as $key => $value) {
					$i++;
					?>
					<tr>
						<td style="text-align:center"><?=$i?></td>
						<td>PS<?=$i?>:<?=$value['jurusan']?></td>
						<td style="text-align:center"><?=$value['TS2_jum_judul']?></td>
						<td style="text-align:center"><?=$value['TS1_jum_judul']?></td>
						<td style="text-align:center"><?=$value['TS_jum_judul']?></td>
						<td><?=$value['TS2_tot_dana']?></td>
						<td><?=$value['TS1_tot_dana']?></td>
						<td><?=$value['TS_tot_dana']?></td>
					</tr>
			

					<?php
						$tot_judul_TS2 +=$value['TS2_jum_judul'];
						$tot_judul_TS1 +=$value['TS1_jum_judul'];
						$tot_judul_TS +=$value['TS_jum_judul'];

						$tot_dana_TS2 +=$value['TS2_tot_dana'];
						$tot_dana_TS1 +=$value['TS1_tot_dana'];
						$tot_dana_TS +=$value['TS_tot_dana'];
					}
					?>
					
				</tbody>
				<tfoot>
						<tr>
							<td></td>
							<td>Total</td>
							<td>na=<?=$tot_judul_TS2?></td>
							<td>nb=<?=$tot_judul_TS1?></td>
							<td>nc=<?=$tot_judul_TS?></td>
							<td>nd=<?=$tot_dana_TS2?></td>
							<td>ne=<?=$tot_dana_TS1?></td>
							<td>nf=<?=$tot_dana_TS?></td>
						</tr>
				</tfoot>
			</table>
<p class="keterangan">
	Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai kegiatan PS yang relevansinya paling dekat
</p>

			<p>
				7.1.2   Uraikan pandangan pimpinan  Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: 
				kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi. 
			</p>
			<p style="border:1px solid black;padding:5px;">
				<?
					foreach ($penggunaan as $key => $value) {
				?>
						<?=$value['F_pendapat_pimpinan_Fak']?>
				<?
					}
				?>
			</p>
