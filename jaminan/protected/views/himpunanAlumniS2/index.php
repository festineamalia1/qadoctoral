<?php
/* @var $this HimpunanAlumniS2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Himpunan Alumni)',
);

$this->menu=array(
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Himpunan Alumni</h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
)); ?>
