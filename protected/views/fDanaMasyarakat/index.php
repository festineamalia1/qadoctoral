<?php
/* @var $this FDanaMasyarakatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fdana Masyarakats',
);

$this->menu=array(
	array('label'=>'Create FDanaMasyarakat', 'url'=>array('create')),
	array('label'=>'Manage FDanaMasyarakat', 'url'=>array('admin')),
);
?>

<h1>Fdana Masyarakats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
