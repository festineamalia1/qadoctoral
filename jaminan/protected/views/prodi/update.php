<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->id_prodi=>array('view','id'=>$model->id_prodi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'View Prodi', 'url'=>array('view', 'id'=>$model->id_prodi)),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>Update Prodi <?php echo $model->id_prodi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>