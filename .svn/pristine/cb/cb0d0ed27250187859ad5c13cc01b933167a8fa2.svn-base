<?php
/* @var $this DanaPelayananController */
/* @var $model DanaPelayanan */

$this->breadcrumbs=array(
	'Dana Pelayanans'=>array('index'),
	$model->id_dana_pelayanan=>array('view','id'=>$model->id_dana_pelayanan),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambahkan Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_dana_pelayanan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update DanaPelayanan <?php echo $model->id_dana_pelayanan; ?></h1>
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