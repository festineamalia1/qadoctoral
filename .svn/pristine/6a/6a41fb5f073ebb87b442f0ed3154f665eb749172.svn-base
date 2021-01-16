<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
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
		font-weight: bold;
		margin-bottom: 50px;
	}
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 10px;
	}
	table.min th{
		text-align: center;
		vertical-align: middle;
	}
	table.kusus th{
		text-align: center;
		vertical-align: middle;
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

<p class="sub_judul">
	<p>4.3.2 Data dosen tetap yang bidang keahliannya di luar bidang Program Studi <?=$data['jurusan']?></p>
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

<table class="table table-bordered min">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama Dosen</td>
			<td>NIDN***</td>
			<td>Tgl Lahir</td>
			<td>Jabatan Akademik***</td>
			<td>Gelar Akademik</td>
			<td>Pendidikan S1, S2, S3, dan Asal PT*</td>
			<td>Bidang Keahlian untuk Setiap Jenjang Pendidikan</td>
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
</table>
<p class="keterangan">
		*Lampirkan fotokopi ijazah<br>
		** NIDN : Nomor Induk Dosen Nasional<br>
		*** Dosen yang telah memperoleh sertifikta dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.
</p>
<?
}
?>