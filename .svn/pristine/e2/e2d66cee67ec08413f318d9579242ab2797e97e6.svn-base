<?php
/* @var $this HasilStudiPelacakanController */
/* @var $model HasilStudiPelacakan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Hasil studi Pelacakan)'=>array('index'),
	$model->id_hsp,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_hsp)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hsp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
	array('label'=>'Manage HasilStudiPelacakan', 'url'=>array('admin')),
);
?>

<h1>View HasilStudiPelacakan #<?php echo $model->id_hsp; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_hsp',
		'id_prodi',
		'id_administrasi',
		'jenis_kemampuan',
		'tanggap_sangat_baik',
		'tanggap_baik',
		'tanggap_cukup',
		'tanggap_kurang',
		'pemanfaatan_hsp',
		'ketarangan',
	),
)); ?>
