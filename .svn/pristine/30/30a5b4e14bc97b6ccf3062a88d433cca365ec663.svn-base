<?php
/* @var $this DanaPelayananController */
/* @var $model DanaPelayanan */

$this->breadcrumbs=array(
	'Dana Pelayanans'=>array('index'),
	$model->id_dana_pelayanan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_dana_pelayanan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dana_pelayanan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data ', 'url'=>array('admin')),
);
?>

<h1>View DanaPelayanan #<?php echo $model->id_dana_pelayanan; ?></h1>
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
		
		'Jdl_kegiatan_pelayanan:html',
		'sumber_dana:html',
		'jenis_dana:html',
		'jml_dana:html',
	),
)); ?>
