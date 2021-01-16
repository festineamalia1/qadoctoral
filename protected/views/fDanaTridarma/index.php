<?php
/* @var $this FDanaTridarmaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fdana Tridarmas',
);

$this->menu=array(
	array('label'=>'Create FDanaTridarma', 'url'=>array('create')),
	array('label'=>'Manage FDanaTridarma', 'url'=>array('admin')),
);
?>

<h1>Fdana Tridarmas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
