<style type="text/css">
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
<?php
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
	4.4.1 Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:
</p>
<table class="table table-bordered min">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Dosen Tidak Tetap</th>
			<th>NIDN***</th>
			<th>Tgl Lahir</th>
			<th>Jabatan Akademik***</th>
			<th>Gelar Akademik</th>
			<th>Pendidikan S1, S2, S3, dan Asal PT*</th>
			<th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
		</tr>
	</thead>
	<tbody>
		<?
		$i=0;
		foreach ($data as $key => $value) {
		$i++;
		?>
		<tr>
			<td style="text-align:center"><?=$i?></td>
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['Nidn']?></td>
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

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/datadosen/CetakPDFDosentidaktetap/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>

<?
}
?>