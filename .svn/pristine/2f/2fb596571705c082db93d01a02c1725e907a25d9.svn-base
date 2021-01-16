<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 9px;
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
if ($id_prodi==1) {
?>
		<p>
			3.1 Mahasiswa
		</p>
		<p>
			3.1.1  Sistem Rekrutmen dan Seleksi Calon Mahasiswa Baru dan Efektivitasnya
		</p>
		<p style="padding-left:25px">
			Kebijakan sistem rekrutmen dan seleksi calon mahasiswa (mencakup mutu prestasi dan reputasi akademik serta bakat pada 
			jenjang pendidikan sebelumnya, equitas wilayah, kemampuan ekonomi dan jender).
			Efektivitas implementasi sistem rekrutmen dan seleksi calon mahasiswa untuk menghasilkan calon mahasiswa 
			yang bermutu diukur dari jumlah peminat, proporsi pendaftar terhadap daya tampung dan proporsi yang diterima dan yang registrasi.
			<br><br>
			Jelaskan sistem rekrutmen dan seleksi calon mahasiswa baru yang diterapkan pada Fakultas/Sekolah Tinggi ini, serta efektivitasnya. 
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
		<p style="border:1px solid black;padding:5px;">
				<?
					foreach ($data as $key => $value) {
				?>
					<?=$value['F_Sistem_rekrutmen']?>
				<?
					}
				?>
		</p>
		<?php } ?>
		<p>
			3.1.2 Tuliskan data mahasiswa reguler dan mahasiswa transfer untuk masing-masing
			program studi S1 pada TS (tahun akademik penuh yang terakhir) 
			di Fakultas/Sekolah Tinggi sesuai dengan mengikuti format tabel berikut:
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
					<th rowspan="1" colspan="6">Jumlah Mahasiswa pada PS:</th>
					<th rowspan="2">Total Mahasiswa pada Fakultas</th>
				</tr>
				<tr>
					<th colspan="1">PS-1 MKP</th>
					<th colspan="1">PS-2 IHI</th>
					<th colspan="1">PS-3 IKOM</th>
					<th colspan="1">PS-4 SLG</th>
					<th colspan="1">PS-5 PSDK</th>
					<th colspan="1">PS-6 JIPP</th>
				</tr>
				<tr>
					<th colspan="1">(1)</th>
					<th colspan="2">(2)</th>
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
				<tr>
						<td rowspan="3" colspan="1">1</td>
						<td rowspan="3" colspan="1">Program Reguler</td>
						<td rowspan="1" colspan="1">1. Mhs Baru bukan transfer</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
						<td rowspan="1" colspan="1">2.Mhs baru transfer</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
						<td rowspan="1" colspan="1">3.Total mhs transfer</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				<tr>
						<td rowspan="3" colspan="1">2</td>
						<td rowspan="3" colspan="1">Program non-Reguler</td>
						<td rowspan="1" colspan="1">1. Mhs Baru bukan transfer</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</tr>
				
			</tbody>
			<tfoot>

			</tfoot>
		</table>
		<p class="keterangan">
			Catatan: <br>
		(1)  Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu
		(baik kelas pagi, siang, sore, malam, dan di seluruh kampus). <br>
		(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.<br>
		(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang 
		telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.
		</p>
		<?php } ?>
		<p>
		3.1.3 Uraikan alasan/pertimbangan Fakultas/Sekolah Tinggi dalam menerima mahasiswa transfer.  Jelaskan pula alasan mahasiswa melakukan  transfer. 
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
		<p style="border:1px solid black;padding:5px;">
			<?
				foreach ($data as $key => $value) {
			?>
					<?=$value['F_Pertimbangan_mhs_transfer']?>
			<?
				}
			?>
		</p> <br>
		<?php } ?>
		<p>
		3.2 Lulusan
		</p>
		<p>
			3.2.1  Tuliskan rata-rata masa studi dan rata-rata IPK lulusan selama tiga tahun terakhir dari mahasiswa reguler bukan transfer
			untuk tiap program studi S1 yang dikelola oleh Fakultas/Sekolah Tinggi dengan mengikuti format  tabel berikut:	
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
					<th width="50px">No.</th>
					<th>Program Studi</th>
					<th>Rata-rata Masa Studi(tahun)</th>
					<th>Rata-rata IPK Lulusan</th>
				</tr>
				<tr>
					<th>(1)</th>
					<th>(2)</th>
					<th>(3)</th>
					<th>(4)</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
				?>
				<tr>
					<td align="center"><?=$i?></td>
					<td>PS-<?=$i?>:<?=$value['jurusan']?></td>
					<td align="center"><?=$value['F_rata2_masa_studi']?></td>
					<td align="center"><?=$value['ipk_rata2_lulusan_reguler']?></td>
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
			3.2.2 Uraikan pandangan Fakultas/Sekolah Tinggi tentang rara-rata masa studi dan rata-rata IPK lulusan, 
			yang mencakup aspek : kewajaran, upaya pengembangan, dan upaya peningkatan mutu. Uraikan pula kendala-kendala yang dihadapi.
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
		<p style="border:1px solid black;padding:5px;">
			<?
				foreach ($data as $key => $value) {
			?>
					<?=$value['F_pandangan_fakultas']?>
			<?
				}
			?>
		</p>		
		<?php } ?>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/CetakPDFMhsReguler/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
	<?
} else {
	?>
		
	<p>
		3.1 Profil Mahasiswa dan Lulusan
	</p>
	<p>
		3.1.1 Tuliskan data seluruh mahasiswa reguler<sup>(1)</sup> dan lulusannya dalam lima tahun terakhir dengan mengikuti format tabel berikut:
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
	<table class="table table-bordered min">
		<thead>
			<tr>
				<th rowspan="2">Thn Akdmk</th>
				<th rowspan="2">Daya Tmpung</th>
				<th rowspan="1" colspan="2">Jumlah Calon Mhs Reguler</th>
				<th rowspan="1" colspan="2">Jumlah Mhs Baru</th>
				<th rowspan="1" colspan="2">Jumlah Total Mahasiswa</th>
				<th rowspan="1" colspan="2">Jumlah Lulusan</th>
				<th rowspan="1" colspan="3">IPK Lulusan Reguler</th>
				<th rowspan="1" colspan="3">Presentasi Lulusan Reguler dgn IPK</th>
			</tr>
			<tr>
				<th colspan="1">Ikut Seleksi</th>
				<th colspan="1">Lulus Seleksi</th>
				<th colspan="1">Reguler Bukan Trasnfer</th>
				<th colspan="1">Transfer<sup>(3)</sup></th>
				<th colspan="1">Reguler Bukan Trasnfer</th>
				<th colspan="1">Trans<sup>(3)</sup></th>
				<th colspan="1">Reguler Bukan Trasnfer</th>
				<th colspan="1">Trans<sup>(3)</sup></th>
				<th colspan="1">Min</th>
				<th colspan="1">Rat</th>
				<th colspan="1">Max</th>
				<th colspan="1"><2.75</th>
				<th colspan="1">2.75 - 3.50</th>
				<th colspan="1">>3.50</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $key => $value) {
			?>
			<tr>
				<td style="text-align:center;"><?=$value['thn_akademik']?></td>
				<td style="text-align:center;"><?=$value['daya_tampung']?></td>
				<td style="text-align:center;"><?=$value['mhs_ikut_seleksi']?></td>
				<td style="text-align:center;"><?=$value['mhs_lulus_seleksi']?></td>
				<td style="text-align:center;"><?=$value['maba_bkn_transfer']?></td>
				<td style="text-align:center;"><?=$value['maba_transfer']?></td>
				<td style="text-align:center;"><?=$value['total_mhs_bkn_transfer']?></td>
				<td style="text-align:center;"><?=$value['total_mhs_transfer']?></td>
				<td style="text-align:center;"><?=$value['jumlah_lulus_bkn_transfer']?></td>
				<td style="text-align:center;"><?=$value['jumlah_lulus_transfer']?></td>
				<td style="text-align:center;"><?=$value['ipk_min_lulusan_reguler']?></td>
				<td style="text-align:center;"><?=$value['ipk_rata2_lulusan_reguler']?></td>
				<td style="text-align:center;"><?=$value['ipk_maks_lulusan_reguler']?></td>
				<td style="text-align:center;"><?=$value['persen_ipk275']?></td>
				<td style="text-align:center;"><?=$value['persen_ipk275_350']?></td>
				<td style="text-align:center;"><?=$value['persen_ipk350']?></td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<p class="keterangan">
		Catatan:<br> 
		TS:Tahun akademik penuh terakhir saat pengisian borang <br>
		Min: IPK Minimum; Rat:IPK Rata-rata; Mak:IPK Maksimum <br>
		Catatan: <br>
		(1)  Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus). <br>
		(2)  Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu. <br>
		(3)  Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.<br>

	</p>
	<?php } ?>
	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/CetakPDFMhsReguler/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>
		
<?
}
?>