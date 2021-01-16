<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 12px;
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

			<p>2.5 Umpan Balik</p>
			<p style="padding-left:25px">
				Apakah Program  Studi telah  melakukan  kajian  tentang  proses  pembelajaran  melalui  umpan
			balik  dari  dosen,  mahasiswa,  alumni,  dan  pengguna  lulusan  mengenai  harapan  dan  persepsi
			mereka? Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.
			</p>
			<table class="table table-bordered min">
						<tr>
							<th width="25px">No</th>
							<th width="125px">Umpan Balik Dari</th>
							<th>Isi Umpan Balik</th>				
							<th>tindak lanjut</th>
						</tr>

						<tr>
						    <td style="text-align:center">1</td>
						    <td>Dosen</td>
						    <td><?=$data['umpan_balik_dosen']?></td>
							<td><?=$data['tindak_lanjut_dosen']?></td>
						</tr>
						<tr>
						    <td style="text-align:center">2</td>
						    <td>Mahasiswa</td>
						    <td><?=$data['umpan_balik_mhs']?></td>
							<td><?=$data['tindak_lanjut_mhs']?></td>
						</tr>
						<tr>
						    <td style="text-align:center">3</td>
						    <td>Alumni</td>
						    <td><?=$data['umpan_balik_alumni']?></td>
							<td><?=$data['tindak_lanjut_alumni']?></td>
						</tr>
						<tr>
						    <td style="text-align:center">4</td>
						    <td>Pengguna Lulusan</td>
						    <td><?=$data['umpan_balik_alumni']?></td>
							<td><?=$data['tindak_lanjut_lulusan']?></td>
						</tr>
						
			</table>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/TataPamong/CetakPDFUmpan_balik/?id_prodi=<?=$data['id_prodi']?>&id_administrasi=<?=$data['id_administrasi']?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>

		<?
		}
		?>
<?
}
?>