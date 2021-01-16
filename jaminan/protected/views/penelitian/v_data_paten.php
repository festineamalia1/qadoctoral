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
		text-justify:inter-world;s
	}
</style>
	<p class="judul" style="font-weight:bold;">
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Lima Tahun Terakhir
	</p>
	<p>
	7.1.6  Sebutkan karya dosen dan atau mahasiswa program studi yang telah memperoleh hak paten/HaKi atau karya yang mendapat pengakuan/penghargaan dari lembaga nasional/ internasional.
	</p>
	<br>
<?
	if(empty($data)){
		?>
		<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
	} else {
	?>
	<table  class="table table-bordered min">
		<thead>
		<tr>
			<th rowspan="2">No</th>
			<th colspan="2"> Nama Karya*</th>
		</tr>
		<tr>
			<th>Paten/Haki</th>
			<th>Karya yang Mendapat Pengakuan/Penghargaan dari Lembaga Nasional/Internasional</th>
		</tr>
		</thead>
		<tbody>
				<?php
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
				?>
				<tr>
					<td width="35px" style="text-align:center"><?=$i?></td>
					<td><?=$value['haki']?></td>
					<td><?=$value['judul']?></td>
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
	<?
	}
	?>
<p class="keterangan">
	Catatan : (*) Lampirkan surat paten/HaKI atau surat pengakuan/penghargaan dari lembaga nasional/ internasional.
</p>
<div class="row-fluid">
<div class="span12" style="text-align:right;">
	<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian/CetakPDFpaten/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
</div>
</div>