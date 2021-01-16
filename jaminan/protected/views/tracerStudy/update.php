<?php
/* @var $this TracerStudyController */
/* @var $model TracerStudy */

$this->breadcrumbs=array(
	'Tracer Studies'=>array('index'),
	$model->id_tracer=>array('view','id'=>$model->id_tracer),
	'Update',
);

$this->menu=array(
	array('label'=>'List TracerStudy', 'url'=>array('index')),
	array('label'=>'Create TracerStudy', 'url'=>array('create')),
	array('label'=>'View TracerStudy', 'url'=>array('view', 'id'=>$model->id_tracer)),
	array('label'=>'Manage TracerStudy', 'url'=>array('admin')),
);
?>

<h1>Update TracerStudy <?php echo $model->id_tracer; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>