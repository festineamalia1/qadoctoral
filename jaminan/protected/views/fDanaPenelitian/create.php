<?php
/* @var $this FDanaPenelitianController */
/* @var $model FDanaPenelitian */

$this->breadcrumbs=array(
	'Fdana Penelitians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FDanaPenelitian', 'url'=>array('index')),
	array('label'=>'Manage FDanaPenelitian', 'url'=>array('admin')),
);
?>

<h1>Create FDanaPenelitian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>