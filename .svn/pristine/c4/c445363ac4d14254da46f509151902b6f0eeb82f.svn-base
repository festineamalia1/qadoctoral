<?php
/* @var $this FSaranaTambahanController */
/* @var $model FSaranaTambahan */

$this->breadcrumbs=array(
	'Fsarana Tambahans'=>array('index'),
	$model->id_sarana_tambahan,
);

$this->menu=array(
	array('label'=>'List FSaranaTambahan', 'url'=>array('index')),
	array('label'=>'Create FSaranaTambahan', 'url'=>array('create')),
	array('label'=>'Update FSaranaTambahan', 'url'=>array('update', 'id'=>$model->id_sarana_tambahan)),
	array('label'=>'Delete FSaranaTambahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sarana_tambahan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FSaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>View FSaranaTambahan #<?php echo $model->id_sarana_tambahan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sarana_tambahan',
		'id_prodi',
		'id_administrasi',
		'investasi_sarana',
		'rencana_investasi',
		'sumber_dana',
	),
)); ?>
