<?php
/* @var $this KemampuanLulusanController */
/* @var $model KemampuanLulusan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Upaya Peningkatan Kemampuan Lulusan)'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkann Data', 'url'=>array('index')),
	array('label'=>'Majemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Upaya Peningkatan Kemampuan Lulusan</h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>