<?php
/* @var $this PrestasiMhsPortalController */
/* @var $model PrestasiMhsPortal */

$this->breadcrumbs=array(
	'Prestasi Mhs Portals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PrestasiMhsPortal', 'url'=>array('index')),
	array('label'=>'Manage PrestasiMhsPortal', 'url'=>array('admin')),
);
?>

<h1>Create PrestasiMhsPortal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>