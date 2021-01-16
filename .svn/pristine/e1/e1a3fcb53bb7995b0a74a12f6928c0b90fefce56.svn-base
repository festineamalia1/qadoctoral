<?php
/* @var $this Agendadanpenelitian_ps_S2Controller */
/* @var $model Agendadanpenelitian_ps_S2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Agenda dan Penelitian dosen Tetap)'=>array('index'),
	$model->id_agenda=>array('view','id'=>$model->id_agenda),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_agenda)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Agenda dan Penelitian Dosen Tetap<?php echo $model->id_agenda; ?></h1>

<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

