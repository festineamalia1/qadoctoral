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
<p class="judul" style="font-weight:bold;">
		7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
	</p>
	<p>
	7.1.6   Tuliskan dosen yang melakukan penelitian dengan melibatkan mahasiswa program doktor untuk penelitian disertasinya, pada tahun akademik terakhir (TS).
	</p>
<?php if($id_prodi == 1){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>		

	
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
				<th width="35px">No</th>
				<th>Nama Dosen Tetap</th>
				<th>Topik Penelitian</th>
				<th>Jumlah Mahasiswa yang terlibat</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=0;
				$tot_jum_mhs_terlbt=0;
				$tot_mhs_terlibat_disertasi=0;
				$tot_seluruh=0;

				foreach ($data as $key => $value) {
					$i++;
				?>
			<tr>
				<td  style="text-align:center"><?=$i?></td>
				<td  style="text-align:center"><?=$value['nama_dosen']?></td>
				<td  style="text-align:center"><?=$value['topik_penelitian_disertasi']?></td>
				<td  style="text-align:center"><?=$value['jum_mhs_terlbt']?></td>
			</tr>

			<?php
				$tot_jum_mhs_terlbt += $value['jum_mhs_terlbt'];

				$tot_mhs_terlibat_disertasi += $value['mhs_terlibat_disertasi'];

				$tot_seluruh += $tot_jum_mhs_terlbt + $tot_mhs_terlibat_disertasi;
			}
			?>

			
		</tbody>
		<tfoot>
			<tr>
				<th rowspan="1"  colspan="3">Total jumlah mahasiswa yang penelitian disertasinya terkait dengan penelitian dosen  </th>
				<th><?=$tot_jum_mhs_terlbt?></th>	
			</tr>
			<tr>
				<th rowspan="1" colspan="3">Jumlah mahasiswa yang penelitian disertasinya tidak terkait dengan penelitian dosen </th>
				<th><?=$tot_mhs_terlibat_disertasi?></th>
			</tr>

			<tr>
				<th rowspan="1" colspan="3">Jumlah total</th>
				<th><?=$tot_seluruh?></th>
			</tr>

		</tfoot>
	</table>

	<div class="row-fluid">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian/CetakPDFtopik/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}
}
?>