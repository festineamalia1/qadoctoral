<?php
/* @var $this FPenggantianController */
/* @var $model FPenggantian */

$this->breadcrumbs=array(
	'Fpenggantians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FPenggantian', 'url'=>array('index')),
	array('label'=>'Manage FPenggantian', 'url'=>array('admin')),
);
?>

<h1>Create FPenggantian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>