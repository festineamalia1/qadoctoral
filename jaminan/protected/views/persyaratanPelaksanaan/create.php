<?php
/* @var $this PersyaratanPelaksanaanController */
/* @var $model PersyaratanPelaksanaan */

$this->breadcrumbs=array(
	'Manajemen Data '=>array('site/manajemen'),
	'Standar 5 (Persyaratan Pelaksanaan Disertasi)'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Persyaratan Pelaksanaan Disertasi </h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>