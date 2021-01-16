<?php
/* @var $this SistemPengelolaanController */
/* @var $model SistemPengelolaan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 2 (Sistem Pengelolaan)'=>array('index'),
	$model->id_sistem_pengelolaan=>array('view','id'=>$model->id_sistem_pengelolaan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_sistem_pengelolaan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Sistem Pengelolaan <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
