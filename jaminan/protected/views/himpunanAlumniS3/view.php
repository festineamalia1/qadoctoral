<?php
/* @var $this HimpunanAlumnis3Controller */
/* @var $model HimpunanAlumnis3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Himpunan Alumni)'=>array('index'),
	'Detail Data Himpunan alumni '.$model->id_himpunans3,
);


$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah data', 'url'=>array('update', 'id'=>$model->id_himpunans3)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_himpunans3),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Himpunan Alumni <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'id_himpunans3',
		'id_prodi',
		'id_administrasi',*/
		array(
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
			),
		array(
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
			),
		'himpunan_alumni',
		'sumbangan_dana',
		'sumbangan_fasilitas',
		'masukan_perbaikan_pembelajaran',
		'pengembangan_jejaring',
		'hasil_kegiatan',
		'sumber_data',
		/*'lampiran',*/
	),
)); ?>
