<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 11px;
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
	.content-field{
		min-height: 900px !important;
	}
</style>


<?
if($id_prodi==1) {
?>
	<p>
		7.1.1 Tuliskan jumlah dan dana penelitian yang dilakukan oleh masing- masing PS di lingkungan Fakultas 
		atau Sekolah Tinggi dalam 3 tahun terakhir dengan mengikuti format tabel berikut :
	</p>
	<?
	if((empty($dana_penelitian))){
	?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
	<?
	} else {
	?>
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th rowspan="2" colspan="1">No</th>
				<th rowspan="2" colspan="1">Nama Program Studi</th>
				<th rowspan="1" colspan="3">Jumlah Judul Penelitian</th>
				<th rowspan="1" colspan="3">Total Dana Penelitian (Juta Rp)</th>			
			</tr>
			<tr>
				<th colspasn="1"><?php echo ($tahun['th_akademik'] - 2);?></th>
				<th colspasn="1"><?php echo ($tahun['th_akademik'] - 1);?></th>
				<th colspasn="1"><?php echo $tahun['th_akademik'];?></th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;

			$tot_judul_TS2=0;
			$tot_judul_TS1=0;
			$tot_judul_TS=0;

			$tot_dana_TS2=0;
			$tot_dana_TS1=0;
			$tot_dana_TS=0;

			foreach ($dana_penelitian as $key => $value) {
			$i++;
			?>
			<tr>
				<td style="text-align:center"><?=$i?></td>
				<td>PS<?=$i?>:<?=$value['jurusan']?></td>
				<td style="text-align:center"><?=$value['TS2_jum_judul']?></td>
				<td style="text-align:center"><?=$value['TS1_jum_judul']?></td>
				<td style="text-align:center"><?=$value['TS_jum_judul']?></td>
				<td><?=$value['TS2_tot_dana']?></td>
				<td><?=$value['TS1_tot_dana']?></td>
				<td><?=$value['TS_tot_dana']?></td>
			</tr>
	

			<?php
				$tot_judul_TS2 +=$value['TS2_jum_judul'];
				$tot_judul_TS1 +=$value['TS1_jum_judul'];
				$tot_judul_TS +=$value['TS_jum_judul'];

				$tot_dana_TS2 +=$value['TS2_tot_dana'];
				$tot_dana_TS1 +=$value['TS1_tot_dana'];
				$tot_dana_TS +=$value['TS_tot_dana'];
			}
			?>
			
		</tbody>
		<tfoot>
				<tr>
					<td></td>
					<td>Total</td>
					<td>na=<?=$tot_judul_TS2?></td>
					<td>nb=<?=$tot_judul_TS1?></td>
					<td>nc=<?=$tot_judul_TS?></td>
					<td>nd=<?=$tot_dana_TS2?></td>
					<td>ne=<?=$tot_dana_TS1?></td>
					<td>nf=<?=$tot_dana_TS?></td>
				</tr>
		</tfoot>
	</table>
	<p class="keterangan">
		Catatan: Kegiatan yang dilakukan bersama oleh dua PS atau lebih sebaiknya dicatat sebagai kegiatan PS yang relevansinya paling dekat.
	</p>
	<?php } ?>
	<p>
		7.1.2   Uraikan pandangan pimpinan  Fakultas/Sekolah Tinggi tentang data pada butir 7.1.1, dalam perspektif: 
		kesesuaian dengan Visi dan Misi, kecukupan, kewajaran, upaya pengembangan dan peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi 
	</p>
	<?
	if((empty($penggunaan))){
	?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
	<?
	} else {
	?>
	<p style="border:1px solid black;padding:5px;">
		<?
			foreach ($penggunaan as $key => $value) {
		?>
				<?=$value['F_pendapat_pimpinan_Fak']?>
		<?
			}
		?>
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/PenelitianDosentetapPs/CetakPDFpenelitiandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

<?
} else {
?>
	<p>
		7.1   Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir<br/><br/>
		7.1.1 1.	Tuliskan agenda dan judul penelitian dosen tetap mengikuti format tabel berikut:
	</p>
	<?
	if((empty($data))){
	?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
	<?
	} else {
	?>
	<table class="table table-bordered min">
	<thead>
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Dosen</th>
			<th rowspan="2">Agenda dan Judul Penelitian</th>
			<th rowspan="2">Judul Penelitian</th>
			<th rowspan="2">Keterlibatan dengan Jaringan Penelitian</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?=$no?></td>	 
			<td><?=$value['nama_dosen']?></td>
			<td><?=$value['agenda_penelitian']?></td>	
			<td><?=$value['judul_penelitian']?></td>	
			<td><?=$value['keterlibatan_penelitian']?></td>		
		</tr>
		<?php
		}
		?>
		
	</tbody>
	<tfoot>

	</tfoot>
</table>
	<p class="keterangan">
		Catatan: (*) sediakan data pendukung pada saat asesmen lapangan
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/PenelitianDosentetapPs/CetakPDFpenelitiandosen/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
}
?>