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
if(empty($akreditasi)){
	?>
	<div class="alert alert-error">
		Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
	</div>
	<?
}else{
?>
	<table class='table table-bordered'>
		<tr>
			<th>Jurusan / Prodi</th>
			<th>Tahun Pengisian Borang</th>
			<th>Pilihan</th>
		</tr>
		<?php
		foreach ($akreditasi as $key => $value) {
			?>
			<tr>
				<td><?php echo $value['jurusan'];?></td>
				<td><?php echo $value['th_akademik'];?></td>
				<td style="text-align:center;"><a href="<?=Yii::app()->getBaseUrl(true)?>/site/CetakAll/?id_prodi=<?=$value['id_prodi']?>&id_administrasi=<?=$value['id_administrasi']?>" type="button" target="_blank" class="btn" >Cetak Borang</a></td>
			</tr>
			<?php
		}
		?>
	</table>
<?
}
?>