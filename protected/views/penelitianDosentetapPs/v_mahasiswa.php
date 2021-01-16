<?php
// echo "<pre>";
// var_dump($data);
// echo "</pre>";
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p style="text-align:center;font-weight:bold;">
	<p>7.1.2 Adakah mahasiswa tugas akhir yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir?<br>
		<input type="checkbox" name="tidak" value="ON"> Tidak ada <br>
		<input type="checkbox" name="ada" value="ON"> Ada <br>
	Jika ada, banyaknya  mahasiswa PS yang ikut serta dalam penelitian dosen adalah ... orang, dari
	... mahasiswa yang melakukan tugas akhir melalui skripsi.</p>
</p>
<table class="table table-bordered">
	<thead>
		<tr>
			
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		foreach ($data as $key => $value) {
		?>
		<tr>
			
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
		<a href="<?=Yii::app()->getBaseUrl(true)?>/penelitiandosentetapps/CetakPDFmahasiswa/?<?=(isset($id_prodi))? 'id_prodi='.$id_prodi.'&' : ''?>id_administrasi=<?=$id_administrasi?>" target="_blank" class="btn btn-primary" value="Cetak Borang"> <i class="icon-print icon-white"></i> Cetak Borang</a>
		<button class="btn btn-warning" value="Export to Excel"><i class="icon-share icon-white"></i> Export to Excel</button>
	</div>
</div>


<?
}
?>