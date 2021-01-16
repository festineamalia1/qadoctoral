<?php
/* @var $this MkPilihan3Controller */
/* @var $model MkPilihan3 */

$this->breadcrumbs=array(
	'Mk Pilihan3s'=>array('index'),
	$model->id_pelaksanaan,
);

$this->menu=array(
	array('label'=>'List MkPilihan3', 'url'=>array('index')),
	array('label'=>'Create MkPilihan3', 'url'=>array('create')),
	array('label'=>'Update MkPilihan3', 'url'=>array('update', 'id'=>$model->id_pelaksanaan)),
	array('label'=>'Delete MkPilihan3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelaksanaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MkPilihan3', 'url'=>array('admin')),
);
?>

<h1>View MkPilihan3 #<?php echo $model->id_pelaksanaan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pelaksanaan',
		'id_administrasi',
		'kode_mk',
		'th_pelaksanaan',
		'sumber_data',
		'lampiran',
	),
)); ?>
