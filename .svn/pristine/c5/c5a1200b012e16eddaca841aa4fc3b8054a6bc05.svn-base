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
	.keterangan{
		font-size: 11px;
		text-align:justify;
		text-justify:inter-world;
	}
</style>
<p>
		3.4 Himpunan Alumni
	</p>
	<p style="padding-left:25px">
		Jelaskan apakah lulusan program studi memiliki himpunan alumni.  
		Jika memiliki, jelaskan jenis partisipasi (sumbangan dana, fasilitas, masukan untuk perbaikan proses 
		pembelajaran, pengembangan jejaring) dan hasil kegiatan dari himpunan alumni untuk kemajuan program studi.
	</p>
<?
if(empty($data)) {
?>
	
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
<?
} else {
?>
	<p style="padding:5px;border:1px solid black;">
		<b>1.Himpunan Alumni </b><br>
		<?
		if(empty($data['himpunan_alumni'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['himpunan_alumni']."</span><br>";
		} ?>
		<b>2.Sumbangan Dana  </b><br>
		<?
		if(empty($data['sumbangan_dana'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['sumbangan_dana']."</span><br>";
		} ?>
		<b>3. Fasilitas  </b><br>
		<?
		if(empty($data['sumbangan_fasilitas'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['sumbangan_fasilitas']."</span><br>";
		} ?>
		<b>4. Masukan Untuk Proses Pembelajaran  </b><br>
		<?
		if(empty($data['masukan_perbaikan_pembelajaran'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['masukan_perbaikan_pembelajaran']."</span><br>";
		} ?>
		<b>5. Pengembangan Jejaring  </b><br>
		<?
		if(empty($data['pengembangan_jejaring'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['pengembangan_jejaring']."</span><br>";
		} ?>
		<b>6. Hasil Kegiatan  </b><br>
		<?
		if(empty($data['hasil_kegiatan'])){
			?>
			<div class="alert alert-error">
		  		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
			<?
		}else{
		echo "<span style='margin-left:15px;'>".$data['hasil_kegiatan']."</span><br>";
		} ?>
	</p>
	<?
}
?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/rekruitmenMaba/CetakPDF_himpunan/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>