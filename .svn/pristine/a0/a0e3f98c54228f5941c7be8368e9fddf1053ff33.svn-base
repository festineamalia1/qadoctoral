<?php
/* @var $this HimpunanAlumniController */
/* @var $model HimpunanAlumni */

$this->breadcrumbs=array(
	'Himpunan Alumni'=>array('index'),
	$model->id_himpunan=>array('view','id'=>$model->id_himpunan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_himpunan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Himpunan Alumni <?php echo $model->id_himpunan; ?></h1>
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

