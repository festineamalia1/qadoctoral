<style type="text/css">
	table{
		font-size: 12px;
	}
	table.min{
		font-size: 11px;
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
	7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
		</p>
			<p>
				7.1.7  Sebutkan karya dosen dan atau mahasiswa program studi yang telah memperoleh hak paten/HaKI atau karya yang mendapat pengakuan/penghargaan dari lembaga nasional/ internasional, tiga tahun terakhir.
				</p>

<?
	if($id_prodi==1) {
?>
	<div class="alert alert-error">
	  Maaf Data yang Anda inginkan tidak ada. 
	</div>

<?
	} else {
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
					<th rowspan="2" colspan="1">No</th>
					<th rowspan="1" colspan="3">Nama Karya*</th>
			</tr>
			<tr>
				<th colspan="1">Paten/Haki</th>
				<th colspan="1">Karya yang Mendapat Pengakuan/ penghargaan dari Lembaga Nasional/ International</th>
			

					
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
					<td><?=$value['status_haki']?></td>
					<td><?=$value['judul']?></td>
				</tr>
				<?php
				}
				?>
				
			</tbody>
			<tfoot>
			</tfoot>
		</table>
		<p class="keterangan">
			*Lampirkan surat paten HaKI atau keterangan sejenis.
		</p>
		<?php } ?>
		<div class="row-fluid">
			<div class="span12" style="text-align:right;">
				<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitian_Dosentetap_Ps_S2/CetakPDFkarya/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
<?
	}
?>