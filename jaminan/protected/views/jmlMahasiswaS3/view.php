<?php
/* @var $this JmlMahasiswaS3Controller */
/* @var $model JmlMahasiswaS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Profil Mahasiswa dan Lulusan)'=>array('index'),
	'Detail data Profil Mahasiswa dan Lulusan '.$model->id_jml_mhs_s3,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_jml_mhs_s3)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jml_mhs_s3),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Profil Mahasiswa dan Lulusan <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
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
		'tahun_akademik',
		'daya_tampung',
		'jml_ikut_seleksi',
		'jml_lolos_seleksi',
		'jml_maba',
		'jml_maba_transfer',
		'jml_total',
		'jml_total_transfer',
		'jml_lulusan',
		'jml_lulusan_transfer',
		'ipk_min',
		'ipk_max',
		'ipk_rata',
		'jml_mhs_wna',
		'rata_lama_studi',
	),
)); ?>
