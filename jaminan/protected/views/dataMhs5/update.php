<?php
/* @var $this DataMhs5Controller */
/* @var $model DataMhs5 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Data Mahasiswa 5 tahun)'=>array('index'),
	$model->id_mhs5=>array('view','id'=>$model->id_mhs5),
	'Ubah Data Mahasiswa 5 Tahun',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_mhs5)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah data Mahasiswa 5 Tahun <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>