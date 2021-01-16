<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
		padding: 7px;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
	.ket_atas{
		font-size: 12px;
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
	4.1 Dosen Tidak Tetap
</p>
<p>
	4.4.1 Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Dosen Tidak Tetap</th>
			<th>NIDN***</th>
			<th>Tgl Lahir</th>
			<th>Jabatan Akademik***</th>
			<th>Gelar Akademik</th>
			<th>Pendidikan S1, S2, S3, dan Asal PT*</th>
			<th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
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
		foreach ($data as $key => $value) {
			$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['NIDN']?></td>
			<td><?=$value['tgl_lahir']?></td>
			<td><?=$value['jabatan_akademik']?></td>
			<td><?=$value['gelar_akademik']?></td>
			<td><?=$value['pendidikanS1']?><?=$value['asal_PTS1']?>,<br>
				<?=$value['pendidikanS2']?><?=$value['asal_PTS2']?>,<br>
				<?=$value['pendidikanS3']?><?=$value['asal_PTS3']?>,<br></td>
			<td><?=$value['bidang_keahlianS1']?><br>
				<?=$value['bidang_keahlianS2']?><br>
				<?=$value['bidang_keahlianS3']?></td>
			
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>
	
	</tfoot>
</table>
<p class="keterangan">
	* Lampirkan fotokopi ijazah.<br>
	** NIDN : Nomor Induk Dosen Nasional <br>
	*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.<br>
</p>
