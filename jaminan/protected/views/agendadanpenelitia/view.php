<?php
/* @var $this AgendadanpenelitiaController */
/* @var $model Agendadanpenelitia */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Agenda dan Penelitian Dosen Tetap)'=>array('index'),
	$model->id_agenda,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_agenda)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_agenda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Agenda dan Penelitian Dosen Tetap  #<?php echo $model->id_agenda; ?></h1>

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
		'ts',
		array (
			'name'=>'Nama Dosen',
			'value'=>$model->relasi_dosen->nama_dosen,
		),
		
		// 'id_agenda',
		// 'nama_dosen',
		'judul_penelitian',
		'agenda_penelitian',
		
		'keterlibatan_penelitian',
		'jabatan_penelitian',
		// 'id_sumber_data',
		// 'sumber_data',
		// 'lampiran',
		// 'id_prodi',
		// 'id_administrasi',
	),
)); ?>
