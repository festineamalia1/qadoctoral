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

<?
if($id_prodi==1) {
?>
	<p style="text-align:left;">
		DAFTAR  LAMPIRAN
	</p>
	<br>
	<p>
		A. LAMPIRAN YANG HARUS DIKIRIM BERSAMA BORANG YANG DIISI FAKULTAS/ SEKOLAH TINGGI
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="text-align:center;width:20px;">No.</th>
				<th style="text-align:center;width:100px;">Nomor Butir</th>
				<th style="text-align:center;">Keterangan</th>
				<th style="text-align:center;width:150px;">Lampiran</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align:center;">1</td>
				<td style="text-align:center;">-</td>
				<td style=""><?=(isset($data['sk_pendirian']))? $data['sk_pendirian']['keterangan']:''?></td>
				<td style="text-align:center;"><?=(isset($data['sk_pendirian']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['sk_pendirian']['nama_file']."' class='btn btn-small' >".$data['sk_pendirian']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">2</td>
				<td style="text-align:center;">1.1</td>
				<td style=""><?=(isset($data['1.1']))? $data['1.1']['keterangan']:'Dokumen Renstra dan Renop Fakultas/ Sekolah Tinggi'?></td>
				<td style="text-align:center;"><?=(isset($data['1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['1.1']['nama_file']."' class='btn btn-small' >".$data['1.1']['nama_file']."</a>":'-'?></td>
			</tr>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<br>
	<p>
		A. LAMPIRAN YANG HARUS DISEDIAKAN FAKULTAS/ SEKOLAH TINGGI PADA SAAT ASESMEN LAPANGAN
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="text-align:center;width:20px;">No.</th>
				<th style="text-align:center;width:100px;">Nomor Butir</th>
				<th style="text-align:center;">Keterangan</th>
				<th style="text-align:center;width:150px;">Lampiran</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align:center;">1</td>
				<td style="text-align:center;">2.1</td>
				<td style=""><?=(isset($data['2.1']))? $data['2.1']['keterangan']:'Dokumen SOP terkait dengan tata pamong '?></td>
				<td style="text-align:center;"><?=(isset($data['2.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['2.1']['nama_file']."' class='btn btn-small' >".$data['2.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">2</td>
				<td style="text-align:center;">2.5</td>
				<td style=""><?=(isset($data['2.5']))? $data['2.5']['keterangan']:'Dokumen tentang sistem penjaminan mutu di tingkat Fakultas/ Sekolah Tinggi'?></td>
				<td style="text-align:center;"><?=(isset($data['2.5']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['2.5']['nama_file']."' class='btn btn-small' >".$data['2.5']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">3</td>
				<td style="text-align:center;">3.1.1</td>
				<td style=""><?=(isset($data['3.1.1']))? $data['3.1.1']['keterangan']:'Dokumen sistem penerimaan mahasiswa baru yang mencakup :</br>
																					   (1) Kebijakan penerimaaan mahasiswa baru </br>
																					   (2) Kriteria penerimaaan mahasiswa baru </br>
																					   (3) Prosedur penerimaaan mahasiswa baru </br>
																					   (4) Instrumen penerimaaan mahasiswa baru </br>
																					   (5) Sistem pengambilan keputusan </br>'?></td>
				<td style="text-align:center;"><?=(isset($data['3.1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['3.1.1']['nama_file']."' class='btn btn-small' >".$data['3.1.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">4</td>
				<td style="text-align:center;">5.1</td>
				<td style=""><?=(isset($data['5.1']))? $data['5.1']['keterangan']:'Dokumen yang terkait dengan penyusunan dan pengembangan kurikulum.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.1']['nama_file']."' class='btn btn-small' >".$data['5.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">5</td>
				<td style="text-align:center;">6.1.1</td>
				<td style=""><?=(isset($data['6.1.1']))? $data['6.1.1']['keterangan']:'Laporan keuangan Fakultas/ Sekolah Tinggi dalam tiga tahun terakhir.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.1.1']['nama_file']."' class='btn btn-small' >".$data['6.1.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">6</td>
				<td style="text-align:center;">6.4</td>
				<td style=""><?=(isset($data['6.4']))? $data['6.4']['keterangan']:'Daftar <i>software</i> yang berlisensi, petunjuk pemanfaatan SIM.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.4']['nama_file']."' class='btn btn-small' >".$data['6.4']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">7</td>
				<td style="text-align:center;">7.1.1</td>
				<td style=""><?=(isset($data['7.1.1']))? $data['7.1.1']['keterangan']:'Hasil penelitian (daftar judul) yang jumlahnya ada dalam borang .'?></td>
				<td style="text-align:center;"><?=(isset($data['7.1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.1.1']['nama_file']."' class='btn btn-small' >".$data['7.1.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">8</td>
				<td style="text-align:center;">7.2.1</td>
				<td style=""><?=(isset($data['7.2.1']))? $data['7.2.1']['keterangan']:'Hasil pelayanan/ pengabdian kepada masyarakat (daftar judul) yang jumlah judulnya ada dalam borang.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.2.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.2.1']['nama_file']."' class='btn btn-small' >".$data['7.2.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">9</td>
				<td style="text-align:center;">7.3.1</td>
				<td style=""><?=(isset($data['7.3.1']))? $data['7.3.1']['keterangan']:'Dokumen pendukung kegiatan kerjasama Fakultas/ Sekolah Tinggi dengan instansi dalam negeri.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.3.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.3.1']['nama_file']."' class='btn btn-small' >".$data['7.3.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">10</td>
				<td style="text-align:center;">7.3.2</td>
				<td style=""><?=(isset($data['7.3.2']))? $data['7.3.2']['keterangan']:'Dokumen pendukung kegiatan kerjasama Fakultas/ Sekolah Tinggi dengan instansi luar negeri.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.3.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.3.2']['nama_file']."' class='btn btn-small' >".$data['7.3.2']['nama_file']."</a>":'-'?></td>
			</tr>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/lampiran/CetakPDF/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a> 
		</div>
	</div>
<?
} else {
?>
	<p style="text-align:center;">
		DAFTAR  LAMPIRAN
	</p>
	<br>
	<p>
		A. LAMPIRAN YANG HARUS DIKIRIM BERSAMA BORANG
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nomor Butir</th>
				<th>Keterangan</th>
				<th>Lampiran</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align:center;">1</td>
				<td style="text-align:center;">-</td>
				<td style=""><?=(isset($data['sk_pendirian']))? $data['sk_pendirian']['keterangan']:'Fotokopi SK pendirian PS '?></td>
				<td style="text-align:center;"><?=(isset($data['sk_pendirian']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['sk_pendirian']['nama_file']."' class='btn btn-small' >".$data['sk_pendirian']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">2</td>
				<td style="text-align:center;">-</td>
				<td style=""><?=(isset($data['sk_perizinan']))? $data['sk_perizinan']['keterangan']:'Fotokopi SK izin operasional PS'?></td>
				<td style="text-align:center;"><?=(isset($data['sk_perizinan']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['sk_perizinan']['nama_file']."' class='btn btn-small' >".$data['sk_perizinan']['nama_file']."</a>":'-'?></td>
			</tr>
			<!-- point 4.3.1 -->
			<tr>
				<td style="text-align:center;">3</td>
				<td style="text-align:center;">4.3.1</td>
				<td style=""><?=(isset($data['4.3.1']))? $data['4.3.1']['keterangan']:'Fotokopi ijazah dan sertifikat pendidik dosen tetap yang bidang keahliannya sesuai dengan PS'?></td>
				<td style="text-align:center;"><?=(isset($data['4.3.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.3.1']['nama_file']."' class='btn btn-small' >".$data['4.3.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">4</td>
				<td style="text-align:center;">4.3.2</td>
				<td style=""><?=(isset($data['4.3.2']))? $data['4.3.2']['keterangan']:'Fotokopi ijazah dan sertifikat pendidik dosen tetap yang bidang keahliannya di luar dengan PS'?></td>
				<td style="text-align:center;"><?=(isset($data['4.3.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.3.2']['nama_file']."' class='btn btn-small' >".$data['4.3.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">5</td>
				<td style="text-align:center;">4.4.1</td>
				<td style=""><?=(isset($data['4.4.1']))? $data['4.4.1']['keterangan']:'Fotokopi ijazah dan sertifikat pendidik dosen tidak tetap'?></td>
				<td style="text-align:center;"><?=(isset($data['4.4.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.4.1']['nama_file']."' class='btn btn-small' >".$data['4.4.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">6</td>
				<td style="text-align:center;">5.3.2</td>
				<td style=""><?=(isset($data['5.3.2']))? $data['5.3.2']['keterangan']:'Contoh soal ujian dalam satu tahun terakhir untuk lima mata kuliah keahlian berikut silabusnya'?></td>
				<td style="text-align:center;"><?=(isset($data['5.3.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.3.2']['nama_file']."' class='btn btn-small' >".$data['5.3.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">7</td>
				<td style="text-align:center;">7.1.4</td>
				<td style=""><?=(isset($data['7.1.4']))? $data['7.1.4']['keterangan']:'Surat paten HaKI atau keterangan sejenis'?></td>
				<td style="text-align:center;"><?=(isset($data['7.1.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.1.4']['nama_file']."' class='btn btn-small' >".$data['7.1.4']['nama_file']."</a>":'-'?></td>
			</tr>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<br>
	<p>
		B. LAMPIRAN YANG HARUS DISEDIAKAN PROGRAM STUDI PADA SAAT ASESMEN LAPANGAN
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
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nomor Butir</th>
				<th>Keterangan</th>
				<th>Lampiran</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="text-align:center;">1</td>
				<td style="text-align:center;">2.1</td>
				<td style=""><?=(isset($data['2.1']))? $data['2.1']['keterangan']:'Dokumen tentang aturan etika dosen, etika mahasiswa, etika tenaga kependidikan, sistem penghargaan dan sanksi, serta pedoman dan prosedur pelayanan. '?></td>
				<td style="text-align:center;"><?=(isset($data['2.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['2.1']['nama_file']."' class='btn btn-small' >".$data['2.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">2</td>
				<td style="text-align:center;">2.4</td>
				<td style=""><?=(isset($data['2.4']))? $data['2.4']['keterangan']:'Dokumen tentang jaminan mutu'?></td>
				<td style="text-align:center;"><?=(isset($data['2.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['2.4']['nama_file']."' class='btn btn-small' >".$data['2.4']['nama_file']."</a>":'-'?></td>
			</tr>
			<!-- point 4.3.1 -->
			<tr>
				<td style="text-align:center;">3</td>
				<td style="text-align:center;">2.5</td>
				<td style=""><?=(isset($data['2.5']))? $data['2.5']['keterangan']:'Dokumen (kuesioner dan hasil) kajian proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan.'?></td>
				<td style="text-align:center;"><?=(isset($data['2.5']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['2.5']['nama_file']."' class='btn btn-small' >".$data['2.5']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">4</td>
				<td style="text-align:center;">3.3.1</td>
				<td style=""><?=(isset($data['3.1.1']))? $data['3.1.1']['keterangan']:'Daftar lulusan dalam lima tahun terakhir (termasuk IPK)'?></td>
				<td style="text-align:center;"><?=(isset($data['3.1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['3.1.1']['nama_file']."' class='btn btn-small' >".$data['3.1.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">5</td>
				<td style="text-align:center;">3.2</td>
				<td style=""><?=(isset($data['3.2']))? $data['3.2']['keterangan']:'Dokumen pendukung pelayanan kepada mahasiswa'?></td>
				<td style="text-align:center;"><?=(isset($data['3.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['3.2']['nama_file']."' class='btn btn-small' >".$data['3.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">6</td>
				<td style="text-align:center;">3.3.1</td>
				<td style=""><?=(isset($data['3.3.1']))? $data['3.3.1']['keterangan']:'Dokumen (kuesioner dan hasil) kinerja lulusan oleh pihak pengguna.'?></td>
				<td style="text-align:center;"><?=(isset($data['3.3.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['3.3.1']['nama_file']."' class='btn btn-small' >".$data['3.3.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">7</td>
				<td style="text-align:center;">3.4</td>
				<td style=""><?=(isset($data['3.4']))? $data['3.4']['keterangan']:'Laporan kegiatan himpunan alumni.'?></td>
				<td style="text-align:center;"><?=(isset($data['3.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['3.4']['nama_file']."' class='btn btn-small' >".$data['3.4']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">8</td>
				<td style="text-align:center;">4.1</td>
				<td style=""><?=(isset($data['4.1']))? $data['4.1']['keterangan']:'Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.1']['nama_file']."' class='btn btn-small' >".$data['4.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">9</td>
				<td style="text-align:center;">4.2.1</td>
				<td style=""><?=(isset($data['4.2.1']))? $data['4.2.1']['keterangan']:'Pedoman tertulis tentang monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan tenaga kependidikan.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.2.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.2.1']['nama_file']."' class='btn btn-small' >".$data['4.2.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">10</td>
				<td style="text-align:center;">4.2.2</td>
				<td style=""><?=(isset($data['4.2.2']))? $data['4.2.2']['keterangan']:'Bukti tentang kinerja dosen di bidang pendidikan, penelitian, pelayanan/pengabdian kepada masyarakat.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.2.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.2.2']['nama_file']."' class='btn btn-small' >".$data['4.2.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">11</td>
				<td style="text-align:center;">4.5.3</td>
				<td style=""><?=(isset($data['4.5.3']))? $data['4.5.3']['keterangan']:'Bukti kegiatan dosen tetap dalam seminar ilmiah/ lokakarya/ penataran/ <i>workshop</i>/ pagelaran/ pameran/peragaan.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.5.3']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.5.3']['nama_file']."' class='btn btn-small' >".$data['4.5.3']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">12</td>
				<td style="text-align:center;">4.5.4</td>
				<td style=""><?=(isset($data['4.5.4']))? $data['4.5.4']['keterangan']:'Bukti pencapaian prestasi/ reputasi dosen.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.5.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.5.4']['nama_file']."' class='btn btn-small' >".$data['4.5.4']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">13</td>
				<td style="text-align:center;">4.5.5</td>
				<td style=""><?=(isset($data['4.5.5']))? $data['4.5.5']['keterangan']:'Fotokopi bukti keikutsertaan dosen tetap dalam organisasi keilmuan/ profesi.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.5.5']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.5.5']['nama_file']."' class='btn btn-small' >".$data['4.5.5']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">14</td>
				<td style="text-align:center;">4.6.1</td>
				<td style=""><?=(isset($data['4.6.1']))? $data['4.6.1']['keterangan']:'Fotokopi ijazah dan sertifikat tenaga kependidikan.'?></td>
				<td style="text-align:center;"><?=(isset($data['4.6.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['4.6.1']['nama_file']."' class='btn btn-small' >".$data['4.6.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">15</td>
				<td style="text-align:center;">5.1.2.2</td>
				<td style=""><?=(isset($data['5.1.2.2']))? $data['5.1.2.2']['keterangan']:'Silabus dan SAP tiap mata kuliah'?></td>
				<td style="text-align:center;"><?=(isset($data['5.1.2.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.1.2.2']['nama_file']."' class='btn btn-small' >".$data['5.1.2.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">16</td>
				<td style="text-align:center;">5.1.4</td>
				<td style=""><?=(isset($data['5.1.4']))? $data['5.1.4']['keterangan']:'Modul praktikum/ praktek untuk setiap kegiatan praktikum/ praktek.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.1.4']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.1.4']['nama_file']."' class='btn btn-small' >".$data['5.1.4']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">17</td>
				<td style="text-align:center;">5.2</td>
				<td style=""><?=(isset($data['5.2']))? $data['5.2']['keterangan']:'Dokumen pendukung kegiatan peninjauan kurikulum.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.2']['nama_file']."' class='btn btn-small' >".$data['5.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">18</td>
				<td style="text-align:center;">5.3.1</td>
				<td style=""><?=(isset($data['5.3.1']))? $data['5.3.1']['keterangan']:'Dokumen pendukung monitoring perkuliahan.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.3.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.3.1']['nama_file']."' class='btn btn-small' >".$data['5.3.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">19</td>
				<td style="text-align:center;">5.5.1</td>
				<td style=""><?=(isset($data['5.5.1']))? $data['5.5.1']['keterangan']:'Panduan pembimbingan tugas akhir.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.5.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.5.1']['nama_file']."' class='btn btn-small' >".$data['5.5.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">20</td>
				<td style="text-align:center;">5.5.2</td>
				<td style=""><?=(isset($data['5.5.2']))? $data['5.5.2']['keterangan']:'Dokumen pendukung untuk memperoleh data rata-rata lama studi mahasiswa.'?></td>
				<td style="text-align:center;"><?=(isset($data['5.5.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['5.5.2']['nama_file']."' class='btn btn-small' >".$data['5.5.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">21</td>
				<td style="text-align:center;">6.1</td>
				<td style=""><?=(isset($data['6.1']))? $data['6.1']['keterangan']:'Notulen rapat/ bukti keterlibatan PS dalam perencanaan anggaran dan pengelolaan dana.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.1']['nama_file']."' class='btn btn-small' >".$data['6.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">22</td>
				<td style="text-align:center;">6.2.2</td>
				<td style=""><?=(isset($data['6.2.2']))? $data['6.2.2']['keterangan']:'Kontrak penelitian.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.2.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.2.2']['nama_file']."' class='btn btn-small' >".$data['6.2.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">23</td>
				<td style="text-align:center;">6.4.1</td>
				<td style=""><?=(isset($data['6.4.1']))? $data['6.4.1']['keterangan']:'Daftar pustaka yang relevan dengan PS, yang dipilih berdasarkan kategorinya.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.4.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.4.1']['nama_file']."' class='btn btn-small' >".$data['6.4.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">24</td>
				<td style="text-align:center;">6.5.1</td>
				<td style=""><?=(isset($data['6.5.1']))? $data['6.5.1']['keterangan']:'Daftar <i>software</i> yang berlisensi, petunjuk pemanfaatan SIM.'?></td>
				<td style="text-align:center;"><?=(isset($data['6.5.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['6.5.1']['nama_file']."' class='btn btn-small' >".$data['6.5.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">25</td>
				<td style="text-align:center;">7.1.1</td>
				<td style=""><?=(isset($data['7.1.1']))? $data['7.1.1']['keterangan']:'Hasil penelitian (rekapitulasi judul dan dokumen laporan penelitian) yang jumlah judulnya ada dalam borang.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.1.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.1.1']['nama_file']."' class='btn btn-small' >".$data['7.1.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">26</td>
				<td style="text-align:center;">7.1.2</td>
				<td style=""><?=(isset($data['7.1.2']))? $data['7.1.2']['keterangan']:'Daftar nama mahasiswa, dosen, dan judul tugas akhir yang dilibatkan dalam penelitian dosen.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.1.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.1.2']['nama_file']."' class='btn btn-small' >".$data['7.1.2']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">27</td>
				<td style="text-align:center;">7.2.1</td>
				<td style=""><?=(isset($data['7.2.1']))? $data['7.2.1']['keterangan']:'Hasil pelayanan/ pengabdian masyarakat (rekapitulasi judul dan dokumen laporan PKM) yang jumlah judulnya ada dalam borang'?></td>
				<td style="text-align:center;"><?=(isset($data['7.2.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.2.1']['nama_file']."' class='btn btn-small' >".$data['7.2.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">28</td>
				<td style="text-align:center;">7.3.1</td>
				<td style=""><?=(isset($data['7.3.1']))? $data['7.3.1']['keterangan']:'Dokumen pendukung kegiatan kerjasama dengan instansi dalam negeri. <i>software</i> yang berlisensi, petunjuk pemanfaatan SIM.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.3.1']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.3.1']['nama_file']."' class='btn btn-small' >".$data['7.3.1']['nama_file']."</a>":'-'?></td>
			</tr>
			<tr>
				<td style="text-align:center;">29</td>
				<td style="text-align:center;">7.3.2</td>
				<td style=""><?=(isset($data['7.3.2']))? $data['7.3.2']['keterangan']:'Dokumen pendukung kegiatan kerjasama dengan instansi luar negeri.'?></td>
				<td style="text-align:center;"><?=(isset($data['7.3.2']))? "<a href='".Yii::app()->getBaseUrl(true)."/file/Lampiran/".$data['7.3.2']['nama_file']."' class='btn btn-small' >".$data['7.3.2']['nama_file']."</a>":'-'?></td>
			</tr>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/lampiran/CetakPDF/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a> 
		</div>
	</div>

<?
}
?>