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
<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<?
	if($id_prodi==1) {
?>
			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
				</div>
			</div>
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
<p>
	2.2 Struktur Organisasi, Koordinasi dan Cara Kerja Fakultas/Sekolah Tinggi
</p>
<p style="padding-left:25px;margin-top:0px;">
	Gambarkan struktur organisasi  Fakultas/Sekolah Tinggi serta tugas/fungsi dari tiap unit yang ada.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['F_Struktur_Organisasi']?>
</div>
<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFPamong/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>
<?
	} else {
?>
<p>2.1 Sistem Tata Pamong</p>
<p style="padding-left:25px">
	Sistem tata pamong berjalan secara efektif melalui mekanisme yang disepakati bersama, serta dapat memelihara dan mengakomodasi semua unsur, 
	fungsi, dan peran dalam program studi. Tata pamong didukung dengan budaya organisasi yang dicerminkan dengan ada dan tegaknya aturan, tatacara 
	pemilihan pimpinan, etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi serta pedoman dan prosedur pelayanan
	 (administrasi, perpustakaan, laboratorium, dan studio). Sistem tata pamong (input, proses, output dan outcome serta lingkungan eksternal yang menjamin terlaksananya 
	 tata pamong yang baik) harus diformulasikan, disosialisasikan, dilaksanakan,  dipantau dan dievaluasi dengan peraturan dan prosedur yang jelas. 
<br><br>
	Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk  membangun sistem tata pamong yang kredibel, transparan, akuntabel, bertanggung jawab dan adil.
</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_tata_pamong']?>
</div>

<div class="row-fluid">
	<div class="span12" style="text-align:right;">
		<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFPamong/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
	</div>
</div>
<?
}
?>

<?
}
?>