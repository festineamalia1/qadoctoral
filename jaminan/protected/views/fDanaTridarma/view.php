<?php
/* @var $this FDanaTridarmaController */
/* @var $model FDanaTridarma */

$this->breadcrumbs=array(
	'Fdana Tridarmas'=>array('index'),
	$model->id_dana,
);

$this->menu=array(
	array('label'=>'List FDanaTridarma', 'url'=>array('index')),
	array('label'=>'Create FDanaTridarma', 'url'=>array('create')),
	array('label'=>'Update FDanaTridarma', 'url'=>array('update', 'id'=>$model->id_dana)),
	array('label'=>'Delete FDanaTridarma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dana),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FDanaTridarma', 'url'=>array('admin')),
);
?>

<h1>View FDanaTridarma #<?php echo $model->id_dana; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dana',
		'id_prodi',
		'id_administrasi',
		'jumlah_dana',
	),
)); ?>
