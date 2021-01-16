<?php
/* @var $this FPrasaranaTambahanController */
/* @var $model FPrasaranaTambahan */

$this->breadcrumbs=array(
	'Fprasarana Tambahans'=>array('index'),
	$model->id_prasarana_tambahan,
);

$this->menu=array(
	array('label'=>'List FPrasaranaTambahan', 'url'=>array('index')),
	array('label'=>'Create FPrasaranaTambahan', 'url'=>array('create')),
	array('label'=>'Update FPrasaranaTambahan', 'url'=>array('update', 'id'=>$model->id_prasarana_tambahan)),
	array('label'=>'Delete FPrasaranaTambahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prasarana_tambahan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FPrasaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>View FPrasaranaTambahan #<?php echo $model->id_prasarana_tambahan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prasarana_tambahan',
		'id_prodi',
		'id_administrasi',
		'jenis_prasarana_tambahan',
		'investasi_prasarana',
		'rencana_investasis',
		'sumber_dana',
	),
)); ?>
