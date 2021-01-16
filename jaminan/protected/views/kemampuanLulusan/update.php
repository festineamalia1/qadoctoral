<?php
/* @var $this KemampuanLulusanController */
/* @var $model KemampuanLulusan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Upaya Peningkkatan Kemampuan Lulusan)'=>array('index'),
	$model->id_kemampuan_lulusan=>array('view','id'=>$model->id_kemampuan_lulusan),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_kemampuan_lulusan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Upaya Peningkatan Kemampuan Lulusan <?php echo $model->id_kemampuan_lulusan; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>