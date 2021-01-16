<?php
/* @var $this TopikPenelitianController */
/* @var $model TopikPenelitian */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Judul dan Penelitian Dosen Melibatkan Mahasiswa)'=>array('index'),
	$model->id_topik,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_topik)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_topik),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Judul dan Penelitian Dosen Melibatkan Mahasiswa ##<?php echo $model->id_topik; ?></h1>

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

		// 'id_topik',
		// 'id_administrasi',
		// 'id_prodi',
		array (
			'name'=>'Nama Dosen',
			'value'=>$model->relasi_dosen->nama_dosen,
		),
		'judul_penelitian',

		'topik_penelitian_disertasi',
	
		

		// 'id_sumber_data',
		// 'sumber_data',
		// 'lampiran',
		'mhs_terlibat_disertasi',
		'jum_mhs_terlbt',
	),
)); ?>
