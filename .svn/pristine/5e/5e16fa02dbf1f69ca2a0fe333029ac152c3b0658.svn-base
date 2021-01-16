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
<?php
if((empty($data)) && (empty($proses))){
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
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada.
		</div>
	<?
		} else {
	?>

				<p>5.4 Sistem Pembimbingan Akademik</p>
				<p>5.4.1 Tuliskan nama dosen pembimbing akademik dan jumlah mahasiswa yang dibimbingnya dengan mengikuti format tabel berikut : </p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Dosen Pembimbing Akademik</th>
							<th>Jumlah Mahasiswa Bimbingan</th>
							<th>Rata-rata Banyaknya Pertemuan/mhs/semester</th>
						</tr>
					</thead>
					<tbody>
						<?
						$i = 0;
						$total = 0;
						$rata = 0;
						foreach ($data as $key => $value) {
							$i++;
							$rata += $value['rata_pertemuan'];
							$total += $value['jml_mhs_bim'];
							?>
							<tr>
								<td style="text-align:center;"><?=$i?></td>
								<td style="text-align:center;"><?=$value['nama_dosen']?>, <?=$value['gelar_akademik']?></td>
								<td style="text-align:center;"><?=$value['jml_mhs_bim']?></td>
								<td style="text-align:center;"><?=$value['rata_pertemuan']?></td>
							</tr>
							<?
						}
						?>
						<tr>
							<td colspan="2" style="text-align:center;">Total</td>
							<td style="text-align:center;"><?=$total?></td>
							<td style="background:#333;"></td>
						</tr>
						<tr>
							<td colspan="4" style="text-align:left;">rata-rata banyaknya pertemuan per mahasiswa per semester = <?=($rata/$i)?> kali</td>
						</tr>
					</tbody>
					<tfoot>

					</tfoot>
				</table>
				<p>5.4.2 Jelaskan proses pembimbingan akademik yang diterapkan pada program studi ini dalam hal-hal berikut :</p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="width:20px;">No.</th>
							<th style="width:200px;">Hal</th>
							<th>Penjelasan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Tujuan Pembimbingan</td>
							<td><?=$proses['tujuan_bim']?></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Pelaksanaan Pembimbingan</td>
							<td><?=$proses['pelaksanaan']?></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Masalah yang dibicarakan dalam pembimbingan</td>
							<td><?=$proses['pembicara']?></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Kesulitan dalam bimbingan dan upaya untuk mengatasinya</td>
							<td><?=$proses['kendala']?></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Manfaat yang diperoleh mahasiswa dari pembimbingan</td>
							<td><?=$proses['manfaat']?></td>
						</tr>
					</tbody>
					<tfoot>

					</tfoot>
				</table>

				<div class="row-fluid">
					<div class="span12" style="text-align:right;margin-top:50px;">
						<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFpembimbingan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
					</div>
				</div>

	<?
		}
	?>

<?
}
?>