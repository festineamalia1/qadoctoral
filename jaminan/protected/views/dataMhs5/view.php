<?php
/* @var $this DataMhs5Controller */
/* @var $model DataMhs5 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Data Mahasiswa 5 tahun)'=>array('index'),
	'Detail Data Mahsiswa 5 Tahun '.$model->id_mhs5,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_mhs5)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mhs5),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
	array('label'=>'Manage DataMhs5', 'url'=>array('admin')),
);
?>

<h1>Detail Data Mahasiswa 5 Tahun <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		/*'id_mhs5',
		'id_prodi',
		'id_administrasi',*/
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'TS_jum',
		'value_jumlah',
		'jum_lulusan',
		'sumber_data',
		/*'lampiran',*/
	),
)); ?>
