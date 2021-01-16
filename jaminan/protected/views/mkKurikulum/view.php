<?php
/* @var $this MkKurikulumController */
/* @var $model MkKurikulum */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Organisai Kurikulum)'=>array('index'),
	$model->kode_mk,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->kode_mk)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_mk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Kurikulum Terstruktur #<?php echo $model->kode_mk; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_mk',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'semester',
		'nama_mk',
		'bobot_sks',
		'jenis_sks',
		'kelengkapan_deskripsi',
		'kelengkapan_silabus',
		'kelengkapan_SAP',
		'penyelenggara',
		'perkuliahan:html',
		'tugas_khusus:html',
		'penelitian:html',
		'hasil_penelitian:html',
		'ket_tambahan',
		'sumber_data',
	//	'id_sumber_data',
		// 'lampiran',
	),
)); ?>