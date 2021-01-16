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
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan tidak ada.
		</div>
	<?
		} else {
	?>
				<p>5.5 Pembimbingan Tugas Akhir / Skripsi</p>
				<p>5.5.1 Pelaksanaan pembimbingan Tugas Akhir atau Skripsi pada PS</p>
				<ul>
					<li>Rata-rata banyaknya mahasiswa per dosen pembimbing tugas akhir (TA) <b><?=(isset($pelaksanaan['rata_mhs_perdosen']) ? $pelaksanaan['rata_mhs_perdosen'] : '....')?></b> mahasiswa/ dosen TA.</li>
					<li>Rata-rata jumlah pertemuan dosen-mahasiswa untuk menyelesaikan tugas akhir: <b><?=(isset($pelaksanaan['rata_jum_pertemuan'])? $pelaksanaan['rata_jum_pertemuan'] : '....' )?></b> kali mulai dari saat mengambil TA hingga menyelesaikan TA.</li>
					<li>Nama dosen yang menjadi pembimbing tugas akhir dan skripsi beserta jumlah mahasiswa yang dibimbing :</li>
				</ul>
				<table class="table table-bordered min">
					<thead>
						<tr>
							<th style="width:20px;">No.</th>
							<th>Nama Dosen Pembimbing</th>
							<th>Jumlah Mahasiswa</th>
						</tr>
					</thead>
					<tbody>
						<?
						$i = 0;
						foreach ($data as $key => $value) {
							$i++;
							?>
							<tr>
								<td style="text-align:center"><?=$i?></td>
								<td><?=$value['nama_dosen']?></td>
								<td style="text-align:center"><?=$value['jml_mhs']?></td>
							</tr>
							<?
						}
						?>
					</tbody>
					<tfoot>

					</tfoot>
				</table>
				<ul>
					<li>Ketersediaan panduan pembimbingan tugas akhir : (berilah tanda V pada pilihan yang sesuai)</li>
				</ul>
				<div style="margin-left:30px;">
					<label class="checkbox inline">
					  <input type="checkbox" id="" value="option1" disabled <?=($pelaksanaan['ketersediaan_panduan'] == 'ya')? 'checked': ''?>> Ya
					</label>
					<label class="checkbox inline">
					  <input type="checkbox" id="" value="option2" disabled <?=($pelaksanaan['ketersediaan_panduan'] == 'tidak')? 'checked': ''?>> Tidak
					</label>
				</div>
				<p style="margin-left:20px;margin-top:10px;">
					Jika Ya, jelaskan cara sosialisasi dan pelaksanaannya :
				</p>
				<div style="border:1px solid black;padding:5px;">
					<?=$pelaksanaan['sosialisasi_pelaksanaan']?>
				</div>

				<p>5.5.2 Rata-rata penyelesaian tugas akhir/ skripsi pada tiga tahun terakhir :.... bulan (menurut kurikulum tugas akhir direncanakan ........ semester).</p>

				<div class="row-fluid">
					<div class="span12" style="text-align:right;margin-top:50px;">
						<a href="<?=Yii::app()->getBaseUrl(true)?>/kurikulum/CetakPDFTA/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
					</div>
				</div>

	<?
		}
	?>

<?
}
?>