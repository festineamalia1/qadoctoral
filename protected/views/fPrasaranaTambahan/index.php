<?php
/* @var $this FPrasaranaTambahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fprasarana Tambahans',
);

$this->menu=array(
	array('label'=>'Create FPrasaranaTambahan', 'url'=>array('create')),
	array('label'=>'Manage FPrasaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>Fprasarana Tambahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
