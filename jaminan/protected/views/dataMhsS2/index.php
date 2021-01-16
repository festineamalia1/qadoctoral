<?php
/* @var $this DataMhsS2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Mhs S2s',
);

$this->menu=array(
	array('label'=>'Create DataMhsS2', 'url'=>array('create')),
	array('label'=>'Manage DataMhsS2', 'url'=>array('admin')),
);
?>

<h1>Data Mhs S2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
