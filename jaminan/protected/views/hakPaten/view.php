<?php
/* @var $this HakPatenController */
/* @var $model HakPaten */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Hak Paten)'=>array('index'),
	'Detail data Hak Paten '.$model->id_paten,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah data', 'url'=>array('update', 'id'=>$model->id_paten)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_paten),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Hak Paten #<?php echo $model->id_paten; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
			),
		array(
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
			),
		array(
			'name'=>'Judul Karya',
			'value'=>$model->relasi_karya->judul,
			),
		'haki',
	),
)); ?>
