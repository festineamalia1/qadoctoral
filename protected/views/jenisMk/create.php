<?php
/* @var $this JenisMkController */
/* @var $model JenisMk */

$this->breadcrumbs=array(
	'Jenis Mks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JenisMk', 'url'=>array('index')),
	array('label'=>'Manage JenisMk', 'url'=>array('admin')),
);
?>

<h1>Create JenisMk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>