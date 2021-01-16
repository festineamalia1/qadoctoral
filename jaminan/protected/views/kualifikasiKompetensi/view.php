<?php
/* @var $this KualifikasiKompetensiController */
/* @var $model KualifikasiKompetensi */

$this->breadcrumbs=array(
	'Kualifikasi Kompetensis'=>array('index'),
	$model->id_kualifikasi,
);

$this->menu=array(
	array('label'=>'List KualifikasiKompetensi', 'url'=>array('index')),
	array('label'=>'Create KualifikasiKompetensi', 'url'=>array('create')),
	array('label'=>'Update KualifikasiKompetensi', 'url'=>array('update', 'id'=>$model->id_kualifikasi)),
	array('label'=>'Delete KualifikasiKompetensi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kualifikasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KualifikasiKompetensi', 'url'=>array('admin')),
);
?>

<h1>View KualifikasiKompetensi #<?php echo $model->id_kualifikasi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_kualifikasi',
		'id_prodi',
		'id_administrasi',
		'upaya_kegiatan',
		'sumber_data',
		'lampiran',
	),
)); ?>
