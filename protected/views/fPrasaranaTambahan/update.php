<?php
/* @var $this FPrasaranaTambahanController */
/* @var $model FPrasaranaTambahan */

$this->breadcrumbs=array(
	'Fprasarana Tambahans'=>array('index'),
	$model->id_prasarana_tambahan=>array('view','id'=>$model->id_prasarana_tambahan),
	'Update',
);

$this->menu=array(
	array('label'=>'List FPrasaranaTambahan', 'url'=>array('index')),
	array('label'=>'Create FPrasaranaTambahan', 'url'=>array('create')),
	array('label'=>'View FPrasaranaTambahan', 'url'=>array('view', 'id'=>$model->id_prasarana_tambahan)),
	array('label'=>'Manage FPrasaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>Update FPrasaranaTambahan <?php echo $model->id_prasarana_tambahan; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>