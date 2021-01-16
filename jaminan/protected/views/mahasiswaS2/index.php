<?php
/* @var $this MahasiswaS2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mahasiswa S2s',
);

$this->menu=array(
	array('label'=>'Create MahasiswaS2', 'url'=>array('create')),
	array('label'=>'Manage MahasiswaS2', 'url'=>array('admin')),
);
?>

<h1>Mahasiswa S2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
