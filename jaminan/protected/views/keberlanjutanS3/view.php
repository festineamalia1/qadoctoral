<?php
/* @var $this KeberlanjutanS3Controller */
/* @var $model KeberlanjutanS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 2 (Upaya Keberlanjutan)'=>array('index'),
	'Detail data Upaya Keberlanjutan '.$model->id_keberlanjutan_s3,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_keberlanjutan_s3)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_keberlanjutan_s3),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Upaya Keberlanjutan <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_keberlanjutan_s3',
		'id_prodi',
		'id_administrasi',
		'animo_calon_mhs',
		'mutu_manajemen',
		'mutu_lulusan',
		'kerjasama_kemitraan',
		'dana_sumber_selain_mahasiswa',
		'sumber_data',
	),
)); ?>
