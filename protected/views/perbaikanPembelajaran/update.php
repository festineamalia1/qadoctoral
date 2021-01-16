<?php
/* @var $this PerbaikanPembelajaranController */
/* @var $model PerbaikanPembelajaran */

$this->breadcrumbs=array(
	'Perbaikan Pembelajaran'=>array('index'),
	$model->id_perbaikan=>array('view','id'=>$model->id_perbaikan),
	'Ubah',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_perbaikan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Perbaikan Pembelajaran <?php echo $model->id_perbaikan; ?></h1>
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
