<?php
/* @var $this FDanaTridarmaController */
/* @var $model FDanaTridarma */

$this->breadcrumbs=array(
	'Fdana Tridarmas'=>array('index'),
	$model->id_dana=>array('view','id'=>$model->id_dana),
	'Update',
);

$this->menu=array(
	array('label'=>'List FDanaTridarma', 'url'=>array('index')),
	array('label'=>'Create FDanaTridarma', 'url'=>array('create')),
	array('label'=>'View FDanaTridarma', 'url'=>array('view', 'id'=>$model->id_dana)),
	array('label'=>'Manage FDanaTridarma', 'url'=>array('admin')),
);
?>

<h1>Update FDanaTridarma <?php echo $model->id_dana; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>