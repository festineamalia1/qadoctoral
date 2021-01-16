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
			7.1.4 Sebutkan karya dosen dan atau mahasiswa Program Studi yang telah memperoleh/sedang
			memproses perlindungan Hak atas Kekayaan Intelektual (HaKI) selama tiga tahun terakhir.
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
					<th>Karya*</th>
					
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
				<a href="<?=Yii::app()->getBaseUrl(true)?>/hasilkarya/CetakPDFkarya/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
			</div>
		</div>
<?
	}
?>