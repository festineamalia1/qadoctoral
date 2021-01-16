<?php
/* @var $this KegiatanTenagaAhliLuarptController */
/* @var $model KegiatanTenagaAhliLuarpt */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Kegiatan Tenaga Ahli Luar PT)'=>array('index'),
	$model->id_kegiatan_luarPT=>array('view','id'=>$model->id_kegiatan_luarPT),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_kegiatan_luarPT)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Kegiatan Tenaga Ahli Luar PT <?php echo $model->id_kegiatan_luarPT; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>



<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>