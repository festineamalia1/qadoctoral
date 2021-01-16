<?php
/* @var $this DanaOperasionalController */
/* @var $model DanaOperasional */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 6 (Dana Operasional)'=>array('index'),
	$model->id_dana_operasional=>array('view','id'=>$model->id_dana_operasional),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambahkan Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_dana_operasional)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update DanaOperasional <?php echo $model->id_dana_operasional; ?></h1>
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