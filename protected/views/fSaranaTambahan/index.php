<?php
/* @var $this FSaranaTambahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fsarana Tambahans',
);

$this->menu=array(
	array('label'=>'Create FSaranaTambahan', 'url'=>array('create')),
	array('label'=>'Manage FSaranaTambahan', 'url'=>array('admin')),
);
?>

<h1>Fsarana Tambahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
