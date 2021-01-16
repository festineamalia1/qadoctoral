<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
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
		text-align: left;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 50px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<p class="judul" style="font-weight:bold;">
	STANDAR 2. TATA PAMONG, KEPEMIMPINAN, SISTEM PENGELOLAAN, DAN 
</p>
<p class="judul" style="padding-left:0px;font-weight:bold;margin-top:-20px">PENJAMINAN MUTU

<?php
if(empty($data)){
	?>
		<div>
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<P>
	2.1 Tata Pamong
</P>
<p style="padding-left:25px">
	Tata pamong adalah suatu sistem yang dapat menjadikan kepemimpinan, sistem pengelolaan dan penjaminan mutu berjalan secara efektif 
	di dalam universitas/institusi yang mengelola program studi.  Hal-hal yang menjadi fokus di dalam tata pamong termasuk 
	bagaimana kebijakan dan strategi disusun sedemikian rupa sehingga memungkinkan terpilihnya pemimpin dan pengelola yang kredibel 
	dan sistem penyelenggaraan program studi secara kredibel, transparan, akuntabel, bertanggung jawab dan menerapkan prinsip-prinsip keadilan.
	Organisasi dan sistem tata pamong yang baik (good governance) mencerminkan kredibilitas, transparansi, akuntabilitas, 
	tanggungjawab dan keadilan Fakultas/Sekolah Tinggi dalam mengelola program studi. 

<br><br>
	Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Fakultas/Sekolah Tinggi untuk memilih pemimpin 
	dan membangun sistem tata pamong yang kredibel, akuntabel, transparan, bertanggung jawab dan adil.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_tata_pamong']?>
</div>
<P>
	2.2 Struktur Organisasi, Koordinasi dan Cara Kerja Fakultas/Sekolah Tinggi
</p>
<p style="padding-left:25px;margin-top:0px;">
	Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.
</P>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['F_Struktur_Organisasi']?>
</div>
<?
}
?>