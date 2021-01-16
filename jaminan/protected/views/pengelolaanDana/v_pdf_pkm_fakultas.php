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
		padding: 8px;
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

				<p>
					7. 2   Pelayanan/Pengabdian kepada Masyarakat
					Pelayanan/Pengabdian kepada Masyarakat adalah penerapan bidang ilmu 
					untuk menyelesaikan masalah di masyarakat (termasuk masyarakat industri, pemerintah, dsb.)
				</p>
				<p>
					7.2.1  Tuliskan jumlah dan dana kegiatan pelayanan/pengabdian kepada masyarakat yang dilakukan oleh masing-masing PS 
					di lingkungan Fakultas dalam tiga tahun terakhir dengan mengikuti format tabel berikut :
				</p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th rowspan="2" colspan="1">No.</th>
							<th rowspan="2" colspan="1">Nama Program Studi</th>
							<th rowspan="1" colspan="3">Jumlah Judul Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
							<th rowspan="1" colspan="3">Total Dana Kegiatan Pelayanan/Pengabdian kepada Masyarakat</th>
						</tr>
						<tr>
							<th colspan="1">TS-2</th>
							<th colspan="1">TS-1</th>
							<th colspan="1">TS</th>
							<th colspan="1">TS-2</th>
							<th colspan="1">TS-1</th>
							<th colspan="1">TS</th>
						</tr>
						<tr>
							<th colspan="1">(1)</th>
							<th colspan="1">(2)</th>
							<th colspan="1">(3)</th>
							<th colspan="1">(4)</th>
							<th colspan="1">(5)</th>
							<th colspan="1">(6)</th>
							<th colspan="1">(7)</th>
							<th colspan="1">(8)</th>
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

						foreach ($pkm_dana_penelitian as $key => $value) {
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
					</tfoot>>
				</table>
				<p class="keterangan">
					Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih agar dicatat sebagai kegiatan PS yang relevansinya paling dekat.
				</p>
				<p> 7.2.2 Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 7.2.1 dalam perspektif: 
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

