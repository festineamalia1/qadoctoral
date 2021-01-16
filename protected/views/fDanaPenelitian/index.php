<?php
/* @var $this FDanaPenelitianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fdana Penelitians',
);

$this->menu=array(
	array('label'=>'Create FDanaPenelitian', 'url'=>array('create')),
	array('label'=>'Manage FDanaPenelitian', 'url'=>array('admin')),
);
?>

<h1>Fdana Penelitians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
