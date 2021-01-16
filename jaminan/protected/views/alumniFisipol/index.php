<?php
/* @var $this AlumniFisipolController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumni Fisipols',
);

$this->menu=array(
	array('label'=>'Create AlumniFisipol', 'url'=>array('create')),
	array('label'=>'Manage AlumniFisipol', 'url'=>array('admin')),
);
?>

<h1>Alumni Fisipols</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
