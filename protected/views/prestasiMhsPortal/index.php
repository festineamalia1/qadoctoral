<?php
/* @var $this PrestasiMhsPortalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestasi Mhs Portals',
);

$this->menu=array(
	array('label'=>'Create PrestasiMhsPortal', 'url'=>array('create')),
	array('label'=>'Manage PrestasiMhsPortal', 'url'=>array('admin')),
);
?>

<h1>Prestasi Mhs Portals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
