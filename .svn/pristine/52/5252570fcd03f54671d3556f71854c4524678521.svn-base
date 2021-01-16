<?php
/* @var $this HasilStudiPelacakanController */
/* @var $model HasilStudiPelacakan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Hasil studi Pelacakan)'=>array('index'),
	$model->id_hsp=>array('view','id'=>$model->id_hsp),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_hsp)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hsp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
	array('label'=>'Manage HasilStudiPelacakan', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Hasil studi Pelacakan <?php echo $model->id_hsp; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>