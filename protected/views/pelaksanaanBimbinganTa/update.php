<?php
/* @var $this PelaksanaanBimbinganTaController */
/* @var $model PelaksanaanBimbinganTa */

$this->breadcrumbs=array(
	'Pelaksanaan Bimbingan TA'=>array('index'),
	$model->id_pelaksanaan=>array('view','id'=>$model->id_pelaksanaan),
	'Ubah',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_pelaksanaan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Pelaksanaan  Bimbingan TA <?php echo $model->id_pelaksanaan; ?></h1>
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