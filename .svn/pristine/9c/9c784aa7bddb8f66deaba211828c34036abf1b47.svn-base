<?php
/* @var $this KetersediaanTempatController */
/* @var $model KetersediaanTempat */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 6 (Penjelasan Ketersediaan)'=>array('index'),
	$model->id_ketersediaan=>array('view','id'=>$model->id_ketersediaan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_ketersediaan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update KetersediaanTempat <?php echo $model->id_ketersediaan; ?></h1>
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