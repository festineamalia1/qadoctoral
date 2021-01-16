<?php
/* @var $this DanaOperasionalController */
/* @var $model DanaOperasional */

$this->breadcrumbs=array(
	'Dana Operasionals'=>array('index'),
	$model->id_dana_operasional,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_dana_operasional)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dana_operasional),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Dana Operasional #<?php echo $model->id_dana_operasional; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		//'id_dana_operasional',
		'TS2',
		'TS1',
		'TS',
		//'id_administrasi',
		//'id_prodi',
	),
)); ?>
