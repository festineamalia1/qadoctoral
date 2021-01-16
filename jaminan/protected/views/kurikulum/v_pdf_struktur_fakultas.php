<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: 0.01pt solid black;
		border-top: 0.01pt solid black ;
		font-weight: bold;
		text-align: center;
		padding: 8px;
	}
	table tr td{
		border: 0.01pt solid black;
		padding: 10px;
	}
	.judul{
		text-align: left;
		font-size: 16px;
		font-weight: bold;
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
<?
	if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada.
	</div>
<?
} else {
?>
		
		<p>5.1.2   Organisasi Kurikulum</p>
		<p style="padding-left:25px">
			Beban studi program doktor bagi peserta yang berpendidikan magister (S2) sebidang sekurang-kurangnya 40 SKS yang dijadwalkan untuk empat semester dan dapat ditempuh kurang dari empat semester dengan lama studi selama-lamanya sepuluh (10) semester.
	Beban studi program doktor bagi peserta yang berpendidikan magister (S2) tidak sebidang sekurang-kurangnya 52 SKS yang dijadwalkan untuk lima semester dan dapat ditempuh kurang dari lima semester dengan lama studi selama-lamanya sebelas (11) semester (Kepmendiknas No. 232/U/2000).</p>
	<br>


		<p> A. Kurikulum Terstruktur </p>
		
		<br>
		<p>5.1.2 Jelaskan struktur kurikulum (perkuliahan, tugas-tugas khusus, penelitian disertasi, penulisan hasil penelitian disertasi) serta keterkaitan di antaranya.</p>
		<br>
		<p>1. Struktur Kurikulum Perkuliahan</p>
		<?php
		//echo '<pre>'; print_r($mk_kurikulum); //exit;
		if(empty($mk_kurikulum[0]['perkuliahan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;">
			<?php
			
			//foreach ($mk_kurikulum as $key => $value) {
				echo"<p>".$mk_kurikulum[0]['perkuliahan']."</p>";
			//}
			?>
						</div>
		<?php } ?>

		<br>
		
		<p>2. Struktur Kurikulum Tugas Khusus</p>
		<?php
		if(empty($mk_kurikulum[0]['tugas_khusus'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
			<div style="border:1px solid black;padding:5px;">
				<?=$mk_kurikulum[0]['tugas_khusus']?>
			</div>
		<?php } ?>
		
		<br>
		<p>3. Struktur Kurikulum Penelitian Disertasi</p>
		<?php
		if(empty($mk_kurikulum[0]['penelitian'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>

		<div style="border:1px solid black;padding:5px;">
			<?=$mk_kurikulum[0]['penelitian']?></div>
		<?php } ?>

		<br>
		<p>4. Struktur Kurikulum Hasil Penelitian Disertasi</p>
		<?php
			if(empty($mk_kurikulum[0]['hasil_penelitian'])){
				?>
					<div class="alert alert-error">
				  	Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
					</div>
				<?
			}else{
				?>
					<div style="border:1px solid black;padding:5px;">
						<?=$mk_kurikulum[0]['hasil_penelitian']?></div>
			<?php } ?>
		<br>

		<p>5.1.2.5 Tuliskan struktur kurikulum berdasarkan urutan mata kuliah (MK) semester demi semester, dengan mengikuti format tabel berikut:</p>
		<table class="table table-bordered min">
			<thead>
				<tr>
					<th rowspan="2">Smt</th>
					<th rowspan="2">Kode MK</th>
					<th rowspan="2">Nama MK*</th>
					<th rowspan="2">Bobot Sks</th>
					<th rowspan="1" colspan="2">Sks MK dalam kurikulum</th>
					
					<th rowspan="1" colspan="3">Kelengkapan****</th>
					<th rowspan="2">Unit Jur/ Fak Penyelenggara</th>
				</tr>
				<tr>
					<th colspan="1">Inti**</th>
					<th colspan="1">Institusional</th>
					<th colspan="1">Deskripsi</th>
					<th colspan="1">Silabus</th>
					<th colspan="1">SAP</th>
				</tr>
			</thead>
			<tbody>
				<?
				foreach ($mk_kurikulum as $key => $value) {
					?>
					<tr>
						<td><?=$value['semester']?></td>
						<td><?=$value['kode_mk']?></td>
						<td><?=$value['nama_mk']?></td>
						<td style="text-align:center;"><?=$value['bobot_sks']?></td>
						<td style="text-align:center;"><?=($value['jenis_sks'] == 'inti')? $value['bobot_jenis_sks']: ($value['bobot_sks'] - $value['bobot_jenis_sks'] )?></td>
						<td style="text-align:center;"><?=($value['jenis_sks'] == 'institusional')? $value['bobot_jenis_sks']: ($value['bobot_sks'] - $value['bobot_jenis_sks'] )?></td>
						
						<td style="text-align:center;"><?=($value['kelengkapan_deskripsi'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
						<td style="text-align:center;"><?=($value['kelengkapan_silabus'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
						<td style="text-align:center;"><?=($value['kelengkapan_SAP'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
						<td><?=$value['penyelenggara']?></td>
					</tr>
					<?
				}
				?>
			</tbody>
			<tfoot>
				<?php
					foreach ($mk_kurikulum as $key => $value) {
						?>
						<tr>
							<td><?=$value['semester']?></td>
							<td><?=$value['kode_mk']?></td>
							<td><?=$value['nama_mk']?></td>
							<td style="text-align:center;"><?=$value['bobot_sks']?></td>
							<td style="text-align:center;"><?=($value['jenis_sks'] == 'inti')?></td>
							<td style="text-align:center;"><?=($value['jenis_sks'] == 'institusional')?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
							<td style="text-align:center;"><?=$value['bobot_tgs']?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
							<td style="text-align:center;"><?=($value['kelengkapan_deskripsi'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
							<td style="text-align:center;"><?=($value['kelengkapan_silabus'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
							<td style="text-align:center;"><?=($value['kelengkapan_SAP'])?'<img style="max-width:15px;" src="'.Yii::app()->baseUrl.'/images/centang2.jpg">':'-'?></td>
							<td><?=$value['penyelenggara']?></td>
						</tr>
						<?
					}
					?>
				</tbody>
				<tfoot>
			</tfoot>
		</table>
		<p class="keterangan">
		* Tuliskan mata kuliah pilihan sebagai mata kuliah pilihan I, mata kuliah pilihan II, dst. (nama-nama mata kuliah pilihan yang dilaksanakan dicantumkan
		dalam tabel 5.1.2.6)
		</p>
		<p class="keterangan">
		** Menurut rujukan peer group / SK Mendiknas 045/2002 (ps. 3 ayat 2e)
		</p>
		<p class="keterangan">
		*** Beri tanda √ pada mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (praktikum/praktek, PR atau makalah) ≥ 20%.
		</p>
		<p class="keterangan">
		****Beri tanda √ pada mata kuliah yang dilengkapi dengan deskripsi, silabus, dan atau SAP. Sediakan dokumen pada saat asesmen lapangan.
		</p>
		<?php } ?>
		<p>B. Kurikulum Tidak Terstruktur
		<p>5.1.2 Jelaskan secara komprehensif penataan dan pelaksanaan program pendidikan doktor yang mencakup kesetaraan  SKS dari kegiatan yang ditugaskan untuk memenuhi persyaratan program studi doktor.</p>
		<?php
		if(empty($kurikulum_tdk_tetap)){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
				<div style="border:1px solid black;padding:5px;">
		<?=$kurikulum_tdk_tetap[0]['penataan_pelaksanaan']?>

			
			</div>
			
 
		<?php
		
			}
			?> 
		
			

	

		<br>
		
		<p>5.1.3  Peninjauan Kurikulum dalam Lima Tahun Terakhir 
Jelaskan mekanisme peninjauan kurikulum dan pihak-pihak yang dilibatkan dalam proses peninjauan tersebut, serta hasil peninjauan tersebut  
</p>
		<?php
		if(empty($kurikulum_tdk_tetap[0]['peninjauan_kurikulum'])){
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
			<div style="border:1px solid black;padding:5px;">
				<?=$kurikulum_tdk_tetap[0]['peninjauan_kurikulum']?>
			</div>
		<?php } ?>

		
