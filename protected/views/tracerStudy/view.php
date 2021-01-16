<?php
/* @var $this TracerStudyController */
/* @var $model TracerStudy */

$this->breadcrumbs=array(
	'Tracer Studies'=>array('index'),
	$model->id_tracer,
);

$this->menu=array(
	array('label'=>'List TracerStudy', 'url'=>array('index')),
	array('label'=>'Create TracerStudy', 'url'=>array('create')),
	array('label'=>'Update TracerStudy', 'url'=>array('update', 'id'=>$model->id_tracer)),
	array('label'=>'Delete TracerStudy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tracer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TracerStudy', 'url'=>array('admin')),
);
?>

<h1>View TracerStudy #<?php echo $model->id_tracer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tracer',
		'id_prodi',
		'id_administrasi',
		'jenis_kemampuan',
		'sangat_baik',
		'baik',
		'cukup',
		'kurang',
		'tindak_lanjut',
		'rata2_wkt_tunggu',
		'persen_kerja_bidang',
		'sumber_data',
		'lampiran',
	),
)); ?>
