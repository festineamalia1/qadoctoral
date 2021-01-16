<?php
/* @var $this PersyaratanPelaksanaanController */
/* @var $model PersyaratanPelaksanaan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Persyaratan Pelaksanaan Disertasi)'=>array('index'),
	$model->id_pp=>array('view','id'=>$model->id_pp),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_pp)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Persyaratan Pelaksanaan Disertasi<?php echo $model->id_pp; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>