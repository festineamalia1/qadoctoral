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
<?
if($id_prodi==1) {
?>

	<p>
		7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
	</p>
	<p>
		7.1.2  Jelaskan penggunaan pendekatan dan pemikiran baru dalam penelitian dosen dan mahasiswa.  
	</p>
	<?php
	if(empty($data['penjelasan_pendekatandanpemikiran'])){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
			<?=$data['penjelasan_pendekatandanpemikiran']?>
		</div>
		<?php 
		}
	}
	else{
	?>
	<p>
		7.1  Penelitian Dosen Tetap yang Bidang Keahliannya Sesuai dengan PS dalam Tiga Tahun Terakhir
	</p>
	<p>
		7.1.2  Jelaskan penggunaan pendekatan dan pemikiran baru dalam penelitian dosen dan mahasiswa.  
	</p>
	<?php
	if(empty($data['penjelasan_pendekatandanpemikiran'])){
		?>
			<div class="alert alert-error">
			  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
			</div>
		<?
		}else{
		?>
		<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
			<?=$data['penjelasan_pendekatandanpemikiran']?>
		</div>
		<?php 
		}
	 ?>
	
	<div class="row-fluid" style="margin-top:10px;">
		<div class="span12" style="text-align:right;">
			<a href="<?=Yii::app()->getBaseUrl(true)?>/dampakPenelitian_ps/CetakPDFpenjelasan/?id_prodi=<?=$id_prodi?>&id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		</div>
	</div>

<?php
}
?>