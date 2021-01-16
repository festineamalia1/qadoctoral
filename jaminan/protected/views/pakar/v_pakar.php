<style type="text/css">
	/*.sub_judul{
		text-align: left;
		font-size: 14px;
	}*/
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
<?php
if($id_prodi == 1){
	?>
	<p>
		4.5 Upaya Peningkatan Sumber Daya Manusia (Pengalaman Dosen Tetap)
	</p>
	<p style="padding-left:25px;">
	
		Sebutkan pengalaman dosen tetap sebagai pakar/konsultan/staf ahli/nara sumber.
	</p>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	
	<p>
		4.5.5.2 Pengalaman Dosen Tetap sebagai Pakar/konsultan/staf ahli/nara sumber.
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
				<th>No</th>
				<th>Nama Dosen</th>
				<th>Nama Lembaga</th>
				<th>Kurun Waktu</th>
				<th>Tingkat (Lokal, Nasional, Internasional)</th>
				<th>Pengalaman Dosen Tetap (Pakar, Konsultan, Staf Ahli, Narasumber)</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			foreach ($data as $key => $value) {
				$i++;
			?>
			<tr>
				<td><?=$i?></td>
				<td><?=$value['nama_dosen']?></td>
				<td><?=$value['nama_lembaga']?></td>
				<td><?=$value['kurun_waktu']?></td>
				<td><?=$value['tingkat']?></td>
				<td><?=$value['sebagai']?></td>
			</tr>
			<?php
			}
			?>
			
		</tbody>
		<tfoot>

		</tfoot>
	</table>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/Pakar/CetakPDFpakar/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}
}
?>