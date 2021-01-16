<?php
$this->breadcrumbs=array(
	'Manajemen Data Aktivitas Dosen Setahun',
);
?>
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs">
		    	<li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/sdm/admin" class="a_tab" data-toggle="tab">Seleksi & Pengembangan / Monev</a></li>
		    	<li class="list_tab active"><a href="<?=Yii::app()->getBaseUrl(true)?>/datadosen/admin" class="a_tab" data-toggle="tab">Dosen Tetap & Tidak Tetap</a></li>
		    	<!-- <li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/mhsreguler/admin" class="a_tab" data-toggle="tab">Dosen Tidak Tetap</a></li> -->
		    	<li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/KegiatanTenagaAhliLuarpt/admin" class="a_tab" data-toggle="tab">Peningkatan SDM</a></li>
		    	<li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/TenagaKependidikan/admin" class="a_tab" data-toggle="tab">Tenaga Kepend.</a></li>
		  	</ul>
		</div>
	</div>
</div>
<!-- <hr style="border-bottom:5px solid #4C99D2;"> -->
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable" style="margin-top:-18px;font-size:12px;"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs" style="background:#eeeeee;">
		    	<li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/datadosen/admin" class="a_tab" data-toggle="tab">Sesuai Bidang & Luar Bidang</a></li>
		    	<li class="list_tab "><a href="<?=Yii::app()->getBaseUrl(true)?>/AktivitasDosenTetapSemester/admin" class="a_tab" data-toggle="tab">Aktivitas Dosen Tetap /semester</a></li>
		    	<li class="list_tab active"><a href="<?=Yii::app()->getBaseUrl(true)?>/AktivitasDosenSetahun/admin" class="a_tab" data-toggle="tab">Aktivitas Dosen Tetap & tdk Tetap /tahun</a></li>
		  	</ul>
		</div>
	</div>
</div>
