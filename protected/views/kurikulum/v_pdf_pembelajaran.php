<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin solid black;
		border-top: thin solid black ;
		font-weight: bold;
		text-align: center;
		padding: 10px;
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
		margin-bottom: 15px;
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
<p>5.3 Pelaksanaan Proses Pembelajaran</p>
<p style="padding-left:25px;margin-top:-10px">
Sistem pembelajaran dibangun berdasarkan perencanaan yang relevan dengan tujuan, ranah
belajar dan hierarkinya.
Pembelajaran dilaksanakan menggunakan berbagai strategi dan teknik yang menantang,
mendorong mahasiswa untuk berpikir kritis bereksplorasi, berkreasi dan bereksperimen dengan
memanfaatkan aneka sumber.
Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki
secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi
perkuliahan, serta penilaian hasil belajar.
</p>
<br>
<p>5.3.1 Mekanisme Penyusunan Materi Kuliah dan Monitoring Perkuliahan</p>
<p style="padding-left:25px;margin-top:-10px">Jelaskan mekanisme penyusunan materi kuliah dan monitoring perkuliahan antara lain kehadiran dosen dan mahasiswa, serta materi kuliah.</p>
<p style="border:1px solid black;padding:5px;">
	<?=$data['penjelasan_penyusunan']?>
</p>
<br>
<p>5.3.2 Lampiran contoh soal ujian dalam 1 tahun terakhir untuk 5 matakuliah keahlian</p>
<?
}
?>