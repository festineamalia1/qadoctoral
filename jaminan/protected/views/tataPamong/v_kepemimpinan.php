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
		2.2 Kepemimpinan
	</p>
	<p style="padding-left:25px">
		Kepemimpinan efektif mengarahkan dan mempengaruhi perilaku semua unsur dalam program studi, mengikuti nilai, norma, etika, dan budaya organisasi
		yang disepakati bersama, serta mampu membuat keputusan yang tepat dan cepat.
		<br><br>
		Kepemimpinan mampu memprediksi masa depan, merumuskan dan mengartikulasi visi yang realistis, kredibel,
		serta mengkomunikasikan visi ke depan, yang menekankan pada keharmonisan hubungan manusia 
		dan mampu menstimulasi secara intelektual dan arif bagi anggota untuk mewujudkan visi organisasi, 
		serta mampu memberikan arahan, tujuan, peran, dan tugas kepada seluruh unsur dalam perguruan tinggi. 
		Dalam menjalankan fungsi kepemimpinan dikenal kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.  
		Kepemimpinan operasional berkaitan dengan kemampuan menjabarkan visi, misi ke dalam kegiatan operasional program studi.  
		Kepemimpinan organisasi berkaitan dengan pemahaman tata kerja antar unit dalam organisasi perguruan tinggi.  
		Kepemimpinan publik berkaitan dengan kemampuan menjalin kerjasama dan menjadi rujukan bagi publik.
		<br><br>
		Jelaskan pola kepemimpinan dalam program studi, mencakup informasi tentang <b> kepemimpinan operasional, kepemimpinan organisasi, dan kepemimpinan publik.</b>
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
	<div style="padding:5px;border:1px solid black;">
		<b>Kepemimpinan Operasional</b><br>
		<?
		if(empty($data['kepemimpinan_operasional'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo $data['kepemimpinan_operasional'];
		} ?>
		<b>Kepemimpinan Organisasi</b><br>
		<?
		if(empty($data['kepemimpinan_organisasi'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo $data['kepemimpinan_organisasi'];
		} ?>
		<b>Kepemimpinan Publik</b><br>
		<?
		if(empty($data['kepemimpinan_publik'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo $data['kepemimpinan_publik'];
		} ?>
	</div>
	<?php } ?>
	<br><br>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFKepemimpinan/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>