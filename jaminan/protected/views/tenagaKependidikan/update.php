<?php
/* @var $this TenagaKependidikanController */
/* @var $model TenagaKependidikan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Tenaga Kependidikan)'=>array('index'),
	$model->id_tenaga_kependidikan=>array('view','id'=>$model->id_tenaga_kependidikan),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_tenaga_kependidikan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Tenaga Kependidikan <?php echo $model->id_tenaga_kependidikan; ?></h1>
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