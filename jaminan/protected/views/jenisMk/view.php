<?php
/* @var $this JenisMkController */
/* @var $model JenisMk */

$this->breadcrumbs=array(
	'Jenis Mks'=>array('index'),
	$model->id_mk_kurikulum,
);

$this->menu=array(
	array('label'=>'List JenisMk', 'url'=>array('index')),
	array('label'=>'Create JenisMk', 'url'=>array('create')),
	array('label'=>'Update JenisMk', 'url'=>array('update', 'id'=>$model->id_mk_kurikulum)),
	array('label'=>'Delete JenisMk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mk_kurikulum),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisMk', 'url'=>array('admin')),
);
?>

<h1>View JenisMk #<?php echo $model->id_mk_kurikulum; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mk_kurikulum',
		'id_prodi',
		'id_administrasi',
		'mk',
		'sks',
		'keterangan',
		'sumber_data',
		'lampiran',
	),
)); ?>
