<?php
/* @var $this AktivitasDosenTetapSetahunController */
/* @var $model AktivitasDosenTetapSetahun */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Setahuns'=>array('index'),
	$model->id_aktivitas_setahun,
);

$this->menu=array(
	array('label'=>'List AktivitasDosenTetapSetahun', 'url'=>array('index')),
	array('label'=>'Create AktivitasDosenTetapSetahun', 'url'=>array('create')),
	array('label'=>'Update AktivitasDosenTetapSetahun', 'url'=>array('update', 'id'=>$model->id_aktivitas_setahun)),
	array('label'=>'Delete AktivitasDosenTetapSetahun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_aktivitas_setahun),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AktivitasDosenTetapSetahun', 'url'=>array('admin')),
);
?>

<h1>View AktivitasDosenTetapSetahun #<?php echo $model->id_aktivitas_setahun; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_aktivitas_setahun',
		'id_prodi',
		'id_administrasi',
		'nama_dosen',
		'bidang_keahlian',
		'kode_mk',
		'nama_mk',
		'jum_kelas',
		'jum_rencana_pertemuan',
		'jum_pertemuan_terlaksana',
		'status_bidang',
		'sumber_data',
		'lampiran',
	),
)); ?>
