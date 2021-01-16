<?php
/* @var $this FPrasaranaTambahanController */
/* @var $model FPrasaranaTambahan */

$this->breadcrumbs=array(
	'Fprasarana Tambahans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FPrasaranaTambahan', 'url'=>array('index')),
	array('label'=>'Manage FPrasaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>Create FPrasaranaTambahan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>