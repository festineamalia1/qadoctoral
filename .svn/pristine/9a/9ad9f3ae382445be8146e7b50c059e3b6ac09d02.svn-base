<?php
/* @var $this Monitoring2Controller */
/* @var $model Monitoring2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Sistem Monitoring dan Evaluasi)'=>array('index'),
	$model->id_monitoring=>array('view','id'=>$model->id_monitoring),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_monitoring)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Monitoring dan Evaluasi <?php echo $model->id_monitoring; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>