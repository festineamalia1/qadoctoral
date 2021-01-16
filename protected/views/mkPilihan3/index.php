<?php
/* @var $this MkPilihan3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mk Pilihan3s',
);

$this->menu=array(
	array('label'=>'Create MkPilihan3', 'url'=>array('create')),
	array('label'=>'Manage MkPilihan3', 'url'=>array('admin')),
);
?>

<h1>Mk Pilihan3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
