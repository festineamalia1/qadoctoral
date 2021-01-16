<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		font-weight: bold;
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
	4.4.1 Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:
</p>

<?php
if(empty($data)){
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
			<th>No</th>
			<th>Nama Dosen</th>
			<th>NIDN***</th>
			<th>Tgl Lahir</th>
			<th>Jabatan Akademik***</th>
			<th>Gelar Akademik</th>
			<th>Pendidikan S1, S2, S3, dan Asal PT*</th>
			<th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td>1</td>
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
	* Fotokopi ijazah agar disiapkan saat visitasi.<br>
	** NIDN : Nomor Induk Dosen Nasional <br>
	*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.<br>
</p>
<?
}
?>