<?php
/* @var $this AktivitasDosenTetapSetahunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Setahuns',
);

$this->menu=array(
	array('label'=>'Create AktivitasDosenTetapSetahun', 'url'=>array('create')),
	array('label'=>'Manage AktivitasDosenTetapSetahun', 'url'=>array('admin')),
);
?>

<h1>Aktivitas Dosen Tetap Setahuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
