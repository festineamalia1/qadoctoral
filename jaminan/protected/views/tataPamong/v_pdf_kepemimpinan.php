<style type="text/css">
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	p{
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