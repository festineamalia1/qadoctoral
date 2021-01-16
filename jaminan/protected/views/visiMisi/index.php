<?php
$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 1 (Visi Misi)',
);

$this->menu=array(
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<?php
	$model=new VisiMisi;
?>

<h1>Data Visi Misi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
)); ?>
