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
<?
if($id_prodi==1) {
	?>
	<p>
		4.3 Data Dosen Tetap 
	</p>

	<p style="padding-left:25px;">
	Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja  36 jam/minggu. <br>
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
				<th rowspan="2">No</th>
				<th rowspan="2" colspan="2">Hal</th>
				<th rowspan="1" colspan="6">Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
				<th rowspan="2">Total di Fakultas</th>
			</tr>
			<tr>
				<th colspan="1">PS-1 <br>MKP</th>
				<th colspan="1">PS-2 <br>IHI</th>
				<th colspan="1">PS-3 <br>IKOM</th>
				<th colspan="1">PS-4 <br>SLG</th>
				<th colspan="1">PS-5 <br>PSDK</th>
				<th colspan="1">PS-6 <br>JIPP</th>
			</tr>
			<tr>
				<th colspan="1">(1)</th>
				<th colspan="1">(2)</th>
				<th colspan="1">(3)</th>
				<th colspan="1">(4)</th>
				<th colspan="1">(5)</th>
				<th colspan="1">(6)</th>
				<th colspan="1">(7)</th>
				<th colspan="1">(8)</th>
				<th colspan="1">(9)</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td>1</td>
				<td>Program Reguler</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<!-- p>
		4.1.2   Tuliskan banyaknya penggantian dan perekrutan serta pengembangan dosen tetap 
		yang bidang keahliannya sesuai dengan program studi pada Fakultas/Sekolah Tinggi dalam tiga tahun terakhir dengan mengikuti format tabel berikut:
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
				<th rowspan="2">No</th>
				<th rowspan="2" colspan="2">Hal</th>
				<th rowspan="1" colspan="6">Jumlah Dosen Tetap yang Bertugas pada Program Studi:</th>
				<th rowspan="2">Total di Fakultas</th>
			</tr>
			<tr>
				<th colspan="1">PS-1 <br>MKP</th>
				<th colspan="1">PS-2 <br>IHI</th>
				<th colspan="1">PS-3 <br>IKOM</th>
				<th colspan="1">PS-4 <br>SLG</th>
				<th colspan="1">PS-5 <br>PSDK</th>
				<th colspan="1">PS-6 <br>JIPP</th>
			</tr>
			<tr>
				<th colspan="1">(1)</th>
				<th colspan="1">(2)</th>
				<th colspan="1">(3)</th>
				<th colspan="1">(4)</th>
				<th colspan="1">(5)</th>
				<th colspan="1">(6)</th>
				<th colspan="1">(7)</th>
				<th colspan="1">(8)</th>
				<th colspan="1">(9)</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td>1</td>
				<td>Program Reguler</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
				<td>1. Mhs baru bukan transfer</td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<p>
		4.1.3    Uraikan pandangan Fakultas/Sekolah Tinggi tentang data pada butir 4.1.1 dan 4.1.2, yang mencakup aspek: kecukupan, kualifikasi, dan pengembangan karir. Jelaskan kendala yang ada dalam pengembangan tenaga dosen tetap.
	</p>
	<?php
	if(empty($data['uraikan'])){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
 -->
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/datadosen/CetakPDFDosentetap_bidang/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" title="Cetak Borang" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
} else {
?>
	<p>4.3 Data Dosen Tetap </p>
	<p>
		Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis, dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya. Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan mempunyai penugasan kerja  36 jam/minggu.<br><br>
		Dosen tetap dipilah dalam 2 kelompok, yaitu:<br>
		1. dosen tetap yang bidang keahliannya sesuai dengan PS<br>
		2. dosen tetap yang bidang keahliannya di luar PS<br> <br>
	</p>
	<p>4.3.1 Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS</p>
	<?php
	if(empty($data)){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Dosen</th>
				<th>NIDN***</th>
				<th>Tgl Lahir</th>
				<th>Jabatan Akademik***</th>
				<th>Gelar Akademik</th>
				<th>Pendidikan S1, S2, S3, dan Asal PT*</th>
				<th>Bidang Keahlian untuk Setiap Jenjang Pendidikan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			foreach ($data as $key => $value) {
				$i++;
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$value['nama_dosen']?></td>
				<td><?=$value['Nidn']?></td>
				<td><?=$value['tgl_lahir']?></td>
				<td><?=$value['jabatan_akademik']?></td>
				<td><?=$value['gelar_akademik']?></td>
				<td>S1 (<?=$value['pendidikanS1']?> - <?=$value['asal_PTS1']?>),<br>
					S2 (<?=$value['pendidikanS2']?> - <?=$value['asal_PTS2']?>),<br>
					S3 (<?=$value['pendidikanS3']?> - <?=$value['asal_PTS3']?>),<br>
				</td>
				<td>S1 (<?=$value['bidang_keahlianS1']?>)<br>
					S2 (<?=$value['bidang_keahlianS2']?>)<br>
					S3 (<?=$value['bidang_keahlianS3']?>)
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<p class="keterangan">
		* Lampirkan fotokopi ijazah S2 dan S3<br>
		** NIDN : Nomor Induk Dosen Nasional <br>
		*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***) dan fotokopi sertifikatnya agar dilampirkan.<br>
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/datadosen/CetakPDFDosentetap_bidang/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" title="Cetak Borang" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

<?
}
?>