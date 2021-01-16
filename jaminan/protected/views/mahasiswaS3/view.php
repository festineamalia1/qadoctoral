<?php
/* @var $this MahasiswaS3Controller */
/* @var $model MahasiswaS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Data Mahasiswa S3'=>array('index'),
	$model->id_mhs_s3,
);

$this->menu=array(
	array('label'=>'Data Mahasiswa S3', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_mhs_s3)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mhs_s3),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail data MahasiswaS3 NIU <?php echo $model->NIU; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIU',
		'NIF',
		'nama_mhs_s3',
		'alamat_mhs',
		'daerah_asal',
		'tgl_lahir',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'jenis_kelamin',
		'warga_negara',
		'status',
		'pekerjaan',
		'tgl_masuk',
		'nama_ortu',
	),
)); ?>
