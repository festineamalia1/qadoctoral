<?php
/* @var $this PrestasiMhsPortalController */
/* @var $model PrestasiMhsPortal */

$this->breadcrumbs=array(
	'Prestasi Mhs Portals'=>array('index'),
	$model->id_prestasi=>array('view','id'=>$model->id_prestasi),
	'Update',
);

$this->menu=array(
	array('label'=>'List PrestasiMhsPortal', 'url'=>array('index')),
	array('label'=>'Create PrestasiMhsPortal', 'url'=>array('create')),
	array('label'=>'View PrestasiMhsPortal', 'url'=>array('view', 'id'=>$model->id_prestasi)),
	array('label'=>'Manage PrestasiMhsPortal', 'url'=>array('admin')),
);
?>

<h1>Update PrestasiMhsPortal <?php echo $model->id_prestasi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>