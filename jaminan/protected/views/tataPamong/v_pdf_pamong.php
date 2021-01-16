<style type="text/css">
	.judul{
		text-align: left;
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

	<P>
	2.1 Tata Pamong
	</P>
	<p style="padding-left:25px">
	Tata pamong program studi harus mencerminkan pelaksanaan good university governance dan  mengakomodasi seluruh nilai, norma, struktur, peran, fungsi, dan aspirasi pemangku kepentingan program studi. Kepemimpinan program studi harus secara efektif memberi arah, motivasi dan inspirasi untuk mewujudkan visi, melaksanakan misi, mencapai tujuan dan sasaran melalui strategi yang dikembangkan
	<br><br>
	Tata pamong (governance) merupakan sistem untuk memelihara efektivitas peran para konstituen dalam pengembangan kebijakan, pengambilan keputusan, dan penyelenggaraan program studi. Tata pamong yang baik jelas terlihat dari lima kriteria yaitu kredibilitas, transparansi, akuntabilitas, tanggungjawab, dan adil.  
	<br><br>
	Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. 
	<br><br>
	Jelaskan secara ringkas sistem dan pelaksanaan tata pamong di program studi untuk  membangun <b>sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil </b> dalam mewujudkan visi, melaksanakan misi, mencapai tujuan dan melaksanakan strategi pencapaian sasaran.
	</p>

<?php
	if(empty($data)){
	?>
		<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?	
	} else { ?>
	<div style="padding:5px;border:1px solid black;">
		<b>Sistem Tata Pamong : </b><br>
		<?
		if(empty($data['sistem_tata_pamong'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['sistem_tata_pamong']."</span><br>";
		} ?>
		<b>Kredibel : </b><br>
		<?
		if(empty($data['kredibel'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['kredibel']."</span><br>";
		} ?>
		<b>Transparan : </b><br>
		<?
		if(empty($data['sistem_tata_pamong'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['transparan']."</span><br>";
		} ?>
		<b>Akuntable : </b><br>
		<?
		if(empty($data['akuntable'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['akuntable']."</span><br>";
		} ?>
		<b>Bertanggung Jawab : </b><br>
		<?
		if(empty($data['bertanggungjawab'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['bertanggungjawab']."</span><br>";
		} ?>
		<b>Adil : </b><br>
		<?
		if(empty($data['adil'])){
			echo "<span style='margin-left:15px;'>Maaf Data yang Anda inginkan masih dalam keadaan kosong</span><br>";
		}else{
		echo "<span style='margin-left:15px;'>".$data['adil']."</span><br>";
		} ?>
	</div>

<?php
 } ?>