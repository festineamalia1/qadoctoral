<?php
/* @var $this FPenggantianController */
/* @var $model FPenggantian */

$this->breadcrumbs=array(
	'Fpenggantians'=>array('index'),
	$model->id_ganti=>array('view','id'=>$model->id_ganti),
	'Update',
);

$this->menu=array(
	array('label'=>'List FPenggantian', 'url'=>array('index')),
	array('label'=>'Create FPenggantian', 'url'=>array('create')),
	array('label'=>'View FPenggantian', 'url'=>array('view', 'id'=>$model->id_ganti)),
	array('label'=>'Manage FPenggantian', 'url'=>array('admin')),
);
?>

<h1>Update FPenggantian <?php echo $model->id_ganti; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>