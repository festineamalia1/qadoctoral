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
</style>
<p>5.3 Penelitian Disertasi</p>
	<p>
		5.3.1 Jelaskan sistem pembimbingan penelitian disertasi pada program studi ini, mencakup informasi tentang:

	</p>
	<td>1. Kebijakan Pembimbingan</td>

<?
if(empty($data)) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan masih dalam keadaan kosong.
	</div>
<?
} else {
?>
	
	<?php
		if(empty($proses['kebijakan_pembimbingan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$proses['kebijakan_pembimbingan']?>
	</div>
	<?php } ?>

		<br>

		<td>2. Mekanisme penunjukan pembimbing (sebagai promotor, kopromotor, anggota) dan mahasiswa bimbingan</td>
		<?php
		if(empty($proses['mekanisme_penunjukkan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$proses['mekanisme_penunjukkan']?>
	</div>
	<?php } ?>

		<td>3. Proses Pembimbingan</td>
		<?php
		if(empty($proses['proses_pembimbingan'])){
		
			?>
				<div class="alert alert-error">
				  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
				</div>
			<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
		<?=$proses['proses_pembimbingan']?>
	</div>
	<?php } ?>

	

	<p>5.3.2 Tuliskan nama dosen pembimbing penelitian disertasi dan jumlah mahasiswa yang dibimbingnya pada TS dengan mengikuti format tabel berikut:  </p>
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
				<th rowspan="2">No.</th>
				<th rowspan="2">Nama Dosen Pembimbing Akademik</th>
				<th rowspan="2">Jabatan Akademik Dosen</th>

				<th rowspan="1" colspan="2" >Banyaknya Mahasiswa yang Dibimbing dan Status Pembimbing</th>
			</tr>
			<tr>
				<th rowspan="2">Promotor</th>
				<th rowspan="2">Kopromotor</th>
				<th rowspan="2">Anggota</th>
			</tr>

		</thead>
		<tbody>
			<?
			$i = 0;
			$totalA = 0;
			$totalB=0;
			$totalC=0;
			$rata = 0;
			foreach ($data as $key => $value) {
				$i++;
				$totalA += $value['jml_promotor'];
				$totalB += $value['jml_kopromotor'];
				$totalC += $value['jml_anggota'];
				?>
				<tr>
					<td style="text-align:center;"><?=$i?></td>
					<td style="text-align:left;"><?=$value['nama_dosen']?>, <?=$value['gelar_akademik']?></td>
					<td style="text-align:center;"><?=$value['jabatan_dosen']?></td>
					<td style="text-align:center;"><?=$value['jml_promotor']?></td>
					<td style="text-align:center;"><?=$value['jml_kopromotor']?></td>
					<td style="text-align:center;"><?=$value['jml_anggota']?></td>

				</tr>
				<?
			}
			?>
			<tr>
				<td colspan="2" style="text-align:center;">Total</td>
				<td style="background:#333;"></td>
				<td style="text-align:center;"><?=$totalA?></td>
				<td style="text-align:center;"><?=$totalB?></td>
				<td style="text-align:center;"><?=$totalC?></td>
			</tr>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php } ?>
	<!--<br>
	<p>
		<tr>
				<td colspan="4" style="text-align:left;">5.4.3  Rata-rata lama penyelesaian tugas akhir/tesis pada tiga tahun terakhir : <?=($rata/$i)?> bulan</td>
			</tr>
		</p>-->
			
	
	<div class="row-fluid">
		<div class="span12" style="text-align:right;margin-top:50px;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpembimbingan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


<?php
}
?>
