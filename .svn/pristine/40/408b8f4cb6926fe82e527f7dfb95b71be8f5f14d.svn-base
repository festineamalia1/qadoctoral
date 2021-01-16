<?php
/* @var $this TugasBljDosenController */
/* @var $model TugasBljDosen */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Tugas Belajar Dosen)'=>array('index'),
	$model->id_kemampuan=>array('view','id'=>$model->id_kemampuan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_kemampuan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update Tugas Belajar Dosen <?php echo $model->id_kemampuan; ?></h1>
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