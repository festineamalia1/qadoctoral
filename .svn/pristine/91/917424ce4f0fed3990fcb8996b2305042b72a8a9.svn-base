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
			<p>
				3.2 Layanan Kepada Mahasiswa
			</p>
			<p>
				Lengkapilah tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.
			</p>
			<table class="table table-bordered">
						<!-- <b>Jurusan :<?=$data['jurusan']?></b><br></br> -->
				<thead>
				<tr class="success">
					<th>Jenis</th>	
					<th>Kegiatan</th>	
					<th>Pelaksanaan</th>	
					<th>Hasil</th>			
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Bimbingan dan Konseling</td>	
					 <td><?=$data['kegiatan_BK']?></td>	
					 <td><?=$data['pelaksanaan_BK']?></td>	
					 <td><?=$data['hasil_BK']?></td>			
				</tr>
				<tr>
				  	<td>Minat dan Bakat</td>	 
					<td><?=$data['kegiatan_minat']?></td>
					<td><?=$data['pelaksanaan_minat']?></td>
					<td><?=$data['hasil_minat']?></td>		
				</tr>
				  <tr>
					<td>Pembinaan <i>Soft Skill</i></td>
					<td><?=$data['kegiatan_softskill']?></td>
					<td><?=$data['pelaksanaan_softskill']?></td>
					<td><?=$data['hasil_softskill']?></td>
				  </tr>
				   <tr>
					<td>Beasiswa</td>
					<td><?=$data['kegiatan_beasiswa']?></td>
					<td><?=$data['pelaksanaan_beasiswa']?></td>
					<td><?=$data['hasil_beasiswa']?></td>
				  </tr>
				   <tr>
					<td>Kesehatan</td>
					<td><?=$data['kegiatan_kesehatan']?></td>
					<td><?=$data['pelaksanaan_kesehatan']?></td>
					<td><?=$data['hasil_kesehatan']?></td>
				  </tr>
				 </tbody>
			</table>

			<div class="row-fluid">
				<div class="span12" style="text-align:right;">
					<a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/CetakPDFLayanan/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
				</div>
			</div>
	<?
		}
	?>

<?
}
?>