<?php
/* @var $this FPenggantianController */
/* @var $model FPenggantian */

$this->breadcrumbs=array(
	'Fpenggantians'=>array('index'),
	$model->id_ganti,
);

$this->menu=array(
	array('label'=>'List FPenggantian', 'url'=>array('index')),
	array('label'=>'Create FPenggantian', 'url'=>array('create')),
	array('label'=>'Update FPenggantian', 'url'=>array('update', 'id'=>$model->id_ganti)),
	array('label'=>'Delete FPenggantian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ganti),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FPenggantian', 'url'=>array('admin')),
);
?>

<h1>View FPenggantian #<?php echo $model->id_ganti; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ganti',
		'hal',
		'PS',
		'total_difakultas',
		'pandangan_fakultas',
	),
)); ?>
