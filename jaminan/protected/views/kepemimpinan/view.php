<?php
/* @var $this KepemimpinanController */
/* @var $model Kepemimpinan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 2 (Kepemimpinan)'=>array('index'),
	'Detail Kepemimpinan'.$model->id_kepemimpinan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_kepemimpinan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kepemimpinan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Kepemimpinan <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_kepemimpinan',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'kepemimpinan_operasional:html',
		'kepemimpinan_organisasi:html',
		'kepemimpinan_publik:html',
		'sumber_data:html',
	),
)); ?>
