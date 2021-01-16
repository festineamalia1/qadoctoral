<?php
/* @var $this PengujiLuarController */
/* @var $model PengujiLuar */

$this->breadcrumbs=array(
	'PengujiLuar'=>array('index'),	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Pengalaman Dosen Tetap)'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Pengalaman Dosen</h1>
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