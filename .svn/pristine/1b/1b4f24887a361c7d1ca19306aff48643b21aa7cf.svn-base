<?php
/* @var $this PrestasiMhsPortalController */
/* @var $model PrestasiMhsPortal */

$this->breadcrumbs=array(
	'Prestasi Mhs Portals'=>array('index'),
	$model->id_prestasi,
);

$this->menu=array(
	array('label'=>'List PrestasiMhsPortal', 'url'=>array('index')),
	array('label'=>'Create PrestasiMhsPortal', 'url'=>array('create')),
	array('label'=>'Update PrestasiMhsPortal', 'url'=>array('update', 'id'=>$model->id_prestasi)),
	array('label'=>'Delete PrestasiMhsPortal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prestasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PrestasiMhsPortal', 'url'=>array('admin')),
);
?>

<h1>View PrestasiMhsPortal #<?php echo $model->id_prestasi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prestasi',
		'nama',
		'nim',
		'jur',
		'kegiatan',
		'ttgl',
		'tanggal',
		'tempat',
		'penyelenggara',
		'prestasi',
		'tingkat',
		'jenis',
	),
)); ?>
