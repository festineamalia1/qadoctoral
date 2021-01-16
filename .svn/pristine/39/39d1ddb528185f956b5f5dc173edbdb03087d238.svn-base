<?php
/* @var $this PenjelasanPengelolaanDanaController */
/* @var $model PenjelasanPengelolaanDana */

$this->breadcrumbs=array(
	'Penjelasan Pengelolaan Dana'=>array('index'),
	$model->id_penjelasan=>array('view','id'=>$model->id_penjelasan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_penjelasan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Penjelasan Pengelolaan Dana <?php echo $model->id_penjelasan; ?></h1>
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