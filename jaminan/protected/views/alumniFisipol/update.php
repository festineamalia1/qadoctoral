<?php
/* @var $this AlumniFisipolController */
/* @var $model AlumniFisipol */

$this->breadcrumbs=array(
	'Alumni Fisipols'=>array('index'),
	$model->almNiu=>array('view','id'=>$model->almNiu),
	'Update',
);

$this->menu=array(
	array('label'=>'List AlumniFisipol', 'url'=>array('index')),
	array('label'=>'Create AlumniFisipol', 'url'=>array('create')),
	array('label'=>'View AlumniFisipol', 'url'=>array('view', 'id'=>$model->almNiu)),
	array('label'=>'Manage AlumniFisipol', 'url'=>array('admin')),
);
?>

<h1>Update AlumniFisipol <?php echo $model->almNiu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>