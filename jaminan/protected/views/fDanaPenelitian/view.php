<?php
/* @var $this FDanaPenelitianController */
/* @var $model FDanaPenelitian */

$this->breadcrumbs=array(
	'Fdana Penelitians'=>array('index'),
	$model->id_dana,
);

$this->menu=array(
	array('label'=>'List FDanaPenelitian', 'url'=>array('index')),
	array('label'=>'Create FDanaPenelitian', 'url'=>array('create')),
	array('label'=>'Update FDanaPenelitian', 'url'=>array('update', 'id'=>$model->id_dana)),
	array('label'=>'Delete FDanaPenelitian', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dana),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FDanaPenelitian', 'url'=>array('admin')),
);
?>

<h1>View FDanaPenelitian #<?php echo $model->id_dana; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dana',
		'id_prodi',
		'id_administrasi',
		'TS',
		'jumlah_judul',
		'total_dana',
		'uraian_pimpinan',
	),
)); ?>
