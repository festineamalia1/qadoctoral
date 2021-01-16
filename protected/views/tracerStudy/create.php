<?php
/* @var $this TracerStudyController */
/* @var $model TracerStudy */

$this->breadcrumbs=array(
	'Tracer Studies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TracerStudy', 'url'=>array('index')),
	array('label'=>'Manage TracerStudy', 'url'=>array('admin')),
);
?>

<h1>Create TracerStudy</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>