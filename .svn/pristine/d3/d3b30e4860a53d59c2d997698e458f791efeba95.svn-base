<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 9px;
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
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
	3.4 Himpunan Alumni
</p>
<p style="padding-left:25px">
	Jelaskan apakah lulusan program studi memiliki himpunan alumni.  
	Jika memiliki, jelaskan jenis partisipasi (sumbangan dana, fasilitas, masukan untuk perbaikan proses 
	pembelajaran, pengembangan jejaring) dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi.
</p>
<p style="padding:5px;border:1px solid black;">
	<b>1.Himpunan Alumni : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['himpunan_alumni']."</span><br>";
	?>
	<b>2.Sumbangan Dana :</b><br>
	<?php
		echo "<span style='margin-left:15px;'>".$data['sumbangan_dana']."</span><br>";
	?>
	<b>3.Sumbangan Dana : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['sumbangan_dana']."</span><br>";
	?>
	<b>4.Sumbangan Fasilitas : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['sumbangan_fasilitas']."</span><br>";
	?>
	<b>5.Masukan untuk Proses Pembelajaran : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['masukan_perbaikan_pembelajaran']."</span><br>";
	?>
	<b>6.Pengembangan Jejaring : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['pengembangan_jejearing']."</span><br>";
	?>
	<b>7. Hasil Kegiatan : </b><br>
	<?php
	echo "<span style='margin-left:15px;'>".$data['hasil_kegiatan']."</span><br>";
	?>
</p>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/himpunanalumni/CetakPDFHimpunanAlumni/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>


<?
}
?>