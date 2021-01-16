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
if ($id_prodi==1) {
?>
		<p>6.2 Prasarana</p>
		<p>
			6.2.1   Uraikan penilaian Fakultas/Sekolah Tinggi tentang prasarana yang telah dimiliki, khususnya yang digunakan untuk program-program studi. 
			Uraian ini mencakup aspek: 
			kecukupan dan kewajaran serta rencana pengembangan dalam lima tahun mendatang. Uraikan kendala yang dihadapi dalam penambahan prasarana.
		</p>
		<?php
		if(empty($data['F_uraian_penilaian'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan tidak ada. 
				</div>
			<?php 
		}else{
		?>
		<p style="border:1px solid black;padding:5px;">
		
			<?//=$data['F_uraian_penilaian']?>
		
		</p><br>
		<?php } ?>

<p>
			6.2.2  Jelaskan ketersediaan tempat kerja dan fasilitas internet (bandwidth) untuk mahasiswa program magister. 

		</p>
		<?
	if(empty($ketersediaan)){
		?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
		<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;">
		<?php
		foreach ($ketersediaan as $key => $value) {
			// 'si','email','surat','fax','sms','sosmed','papan','lainnya'
				
			
			echo "<p>".$value['penjelasan_ketersediaan']."</p>";
			
		}
		?>
	</div>
	<?php } ?>

		<p>
			6.2.3 Sebutkan prasarana tambahan untuk semua  program studi yang dikelola dalam tiga tahun terakhir.
			Uraikan pula  rencana investasi untuk prasarana dalam lima tahun mendatang, dengan mengikuti format tabel berikut :
		</p>
		<?php
		if((empty($F_prasarana))){
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
					<th rowspan="2">No</th>
					<th rowspan="2">Jenis Prasarana Tambahan</th>
					<th rowspan="2">Investasi Prasarana Selama Tiga Tahun Terkahir (Juta Rp)</th>
					<th rowspan="1" colspan="2">Rencana Investasi Prasarana dalam Lima Tahun Mendatang</th>
				</tr>
				<tr>
					<th colspan="1">Nilai Investasi (Juta Rp)</th>
					<th colspan="1">Sumber Dana</th>
				</tr>
			</thead>
			<tbody>
				<?
				$i=0;
				foreach ($F_prasarana as $key => $value) {
					$i++;
					?>
					<tr>
						<td><?=$i?></td>
						<td><?=$value['jenis_prasarana_tambahan']?></td>
						<td><?=$value['investasi_prasarana']?></td>
						<td><?=$value['rencana_investasis']?></td>
						<td><?=$value['sumber_dana']?></td>
					</tr>
					<?
				}
				?>
			</tbody>
			<tfoot>

			</tfoot>
		</table>
		<?php } ?>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFprasarana/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>

<?
} else {
?>
	<p>6.2 Prasarana</p>
	<p>
		6.2.1 Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan PS dengan mengikuti format tabel berikut :
	</p>
	<?php
	if((empty($data))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th>Ruang Kerja Dosen</th>
				<th>Jumlah Ruang</th>
				<th>Jumlah Luas(m persegi)</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
			</tr>
		</thead>
		<tbody>
			<?
			$tot=0;
			if(isset($data['lbh4'])){
				foreach ($data['lbh4'] as $key => $value) {
					$tot += $value['luasm2'];
					?>
					<tr>
						<td>Satu Ruang untuk lebih dari 4 dosen</td>
						<td style="text-align:center;"><?=$value['jml_ruang']?></td>
						<td style="text-align:center;"><?=$value['luasm2']?></td>
					</tr>
					<?
				}
			}else{
				?>
				<tr>
					<td>Satu  Ruang untuk lebih dari 4 dosen</td>
					<td style="text-align:center;">-</td>
					<td style="text-align:center;">-</td>
				</tr>
				<?
			}
			?>
			<?
			if(isset($data['3sd4'])){
				foreach ($data['3sd4'] as $key => $value) {
					$tot += $value['luasm2'];
					?>
					<tr>
						<td>Satu Ruang untuk 3 - 4 dosen</td>
						<td style="text-align:center;"><?=$value['jml_ruang']?></td>
						<td style="text-align:center;"><?=$value['luasm2']?></td>
					</tr>
					<?
				}
			}else{
				?>
				<tr>
					<td>Satu  Ruang untuk 3 - 4 dosen</td>
					<td style="text-align:center;">-</td>
					<td style="text-align:center;">-</td>
				</tr>
				<?
			}
			?>
			<?
			if(isset($data['2'])){
				foreach ($data['2'] as $key => $value) {
					$tot += $value['luasm2'];
					?>
					<tr>
						<td>Satu Ruang untuk 2 dosen</td>
						<td style="text-align:center;"><?=$value['jml_ruang']?></td>
						<td style="text-align:center;"><?=$value['luasm2']?></td>
					</tr>
					<?
				}
			}else{
				?>
				<tr>
					<td>Satu  Ruang untuk 2 dosen</td>
					<td style="text-align:center;">-</td>
					<td style="text-align:center;">-</td>
				</tr>
				<?
			}
			?>
			<?
			if(isset($data['1'])){
				foreach ($data['1'] as $key => $value) {
					$tot += $value['luasm2'];
					?>
					<tr>
						<td>Satu Ruang untuk satu Dosen (Bukan pejabat strukturan)</td>
						<td style="text-align:center;"><?=$value['jml_ruang']?></td>
						<td style="text-align:center;"><?=$value['luasm2']?></td>
					</tr>
					<?
				}
			}else{
				?>
				<tr>
					<td>Satu Ruang untuk satu Dosen (Bukan pejabat strukturan)</td>
					<td style="text-align:center;">-</td>
					<td style="text-align:center;">-</td>
				</tr>
				<?
			}
			?>
			<tr>
				<td>Total</td>
				<td style="background:#333"></td>
				<td style="text-align:center;"><?=$tot?></td>
			</tr>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>

<p>
			6.2.2  Jelaskan ketersediaan tempat kerja dan fasilitas internet (bandwidth) untuk mahasiswa program magister. 

		</p>
		<?
	if(empty($ketersediaan)){
		?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
		<?
	}else{
	?>
	<div style="border:1px solid black;padding:5px;">
		<?php
		foreach ($ketersediaan as $key => $value) {
			// 'si','email','surat','fax','sms','sosmed','papan','lainnya'
				
			
			echo "<p>".$value['penjelasan_ketersediaan']."</p>";
			
		}
		?>
	</div>
	<?php } ?>

	<br>
	<p>
		6.2.3 Tuliskan data prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. <b>kecuali</b> ruang dosen)
		yang dipergunakan PS dalam proses belajar mengajar dengan mengikuti format tabel berikut: 
	</p>
	<?php
	if((empty($lain))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th rowspan="2">No.</th>
				<th rowspan="2">Jenis Prasarana</th>
				<th rowspan="2">Jumlah Unit</th>
				<th rowspan="2">Total Luas (meter persegi)</th>
				<th rowspan="1" colspan="2">Kepemilikan</th>
				<th rowspan="1" colspan="2">Kondisi</th>
				<th rowspan="2">Utilitas Jam/minggu</th>
			</tr>
			<tr>
				<th colspan="1">SD</th>
				<th colspan="1">SW</th>
				<th colspan="1">Terawat</th>
				<th colspan="1">Tidak Terawat</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
				<th>(5)</th>
				<th>(6)</th>
				<th>(7)</th>
				<th>(8)</th>
				<th>(9)</th>
			</tr>
		</thead>
		<tbody>
			<?
			$i = 0;
			foreach ($lain as $key => $value) {
				$i++;
				?>
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td><?=$value['jenis_prasarana']?></td>
					<td><?=$value['jml_unit']?></td>
					<td><?=$value['tot_luas']?></td>
					<td style="text-align:center;"><?=($value['kepemilikan'] == 'sendiri')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kepemilikan'] == 'sewa')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kondisi'] == 'terawat')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kondisi'] == 'tidak')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=$value['utilisasi']?></td>
				</tr>
				<?
			}
			?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		Keterangan :<br>
		SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama
	</p>
	<?php } ?>
	<p>
		6.2.4 Tuliskan data prasarana lain yang menunjang (misalnya tempat olahraga, ruang bersama, ruang himpunan mahasiswa, poliklinik) dengan
		mengikuti format tabel berikut :
	</p>
	<?php
	if((empty($lain2))){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	}else{
	?>
	<table class="table table-bordered kusus">
		<thead>
			<tr>
				<th rowspan="2">No.</th>
				<th rowspan="2">Jenis Prasarana Penunjang</th>
				<th rowspan="2">Jumlah Unit</th>
				<th rowspan="2">Total Luas (meter persegi)</th>
				<th rowspan="1" colspan="2">Kepemilikan</th>
				<th rowspan="1" colspan="2">Kondisi</th>
				<th rowspan="2">Unit Pengelola</th>
			</tr>
			<tr>
				<th colspan="1">SD</th>
				<th colspan="1">SW</th>
				<th colspan="1">Terawat</th>
				<th colspan="1">Tidak Terawat</th>
			</tr>
			<tr>
				<th>(1)</th>
				<th>(2)</th>
				<th>(3)</th>
				<th>(4)</th>
				<th>(5)</th>
				<th>(6)</th>
				<th>(7)</th>
				<th>(8)</th>
				<th>(9)</th>
			</tr>
		</thead>
		<tbody>
			<?
			$i = 0;
			foreach ($lain2 as $key => $value) {
				$i++;
				?>
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td><?=$value['jenis_prasarana']?></td>
					<td><?=$value['jml_unit']?></td>
					<td><?=$value['tot_luas']?></td>
					<td style="text-align:center;"><?=($value['kepemilikan'] == 'sendiri')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kepemilikan'] == 'sewa')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kondisi'] == 'terawat')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=($value['kondisi'] == 'tidak')? '<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
					<td style="text-align:center;"><?=$value['unit_pengelola']?></td>
				</tr>
				<?
			}
			?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		Keterangan :<br>
		SD = Milik PT/ fakultas/ Jurusan sendiri; SW = Sewa/ Kontrak/Kerjasama
	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/pengelolaandana/CetakPDFprasarana/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
<?
}
?>