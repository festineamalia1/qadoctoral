<?php
/* @var $this Monitoring2Controller */
/* @var $model Monitoring2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Sistem Monitoring dan Evaluasi)'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkann Data', 'url'=>array('index')),
	array('label'=>'Majemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Monitoring dan Evaluasi </h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>