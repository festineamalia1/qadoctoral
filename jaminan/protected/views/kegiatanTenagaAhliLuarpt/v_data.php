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
<?php 
if($id_prodi == 1){
	?>
	<p>
		4.5 Upaya Peningkatan Sumber Daya Manusia (Kegiatan Tenaga Ahli)
	</p>
	<p style="padding-left:25px;">
		Kegiatan tenaga ahli/pakar dari luar PT (tidak termasuk dosen tidak tetap) sebagai pembicara dalam seminar/pelatihan, sebagai pembicara tamu dsb. di program studi ini.
	</p>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
	?>
	<p>4.5 Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir</p>
	<p style="text-align:center;font-weight:bold;">
	<p>4.5.1  Kegiatan tenaga ahli/pakar dari luar PT (tidak termasuk dosen tidak tetap) sebagai pembicara dalam seminar/pelatihan, sebagai pembicara tamu dsb. di program studi ini.</p>
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
				<th width="35px">No</th>
				<th>Nama Pakar</th>
				<th>Nama Kegiatan</th>
				<th>Judul Kegiatan</th>
				<th>Peran Sebagai</th>
				<th>Waktu</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i=0;
			foreach ($data as $key => $value) {
				$i++;
			?>
			<tr>
				<td style="text-align:center"><?=$i?></td>
				<td><?=$value['nama_pakar']?></td>
				<td><?=$value['nama_kegiatan']?></td>
				<td><?=$value['judul_kegiatan']?></td>
				<td><?=$value['sebagai']?></td>
				<td><?=$value['waktu']?></td>	
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
			<a href="<?=Yii::app()->getBaseUrl(true)?>/KegiatanTenagaAhliLuarpt/CetakPDFtenagaahli/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>


	<?
	}
}
?>