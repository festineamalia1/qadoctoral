<?php
/* @var $this FDanaMasyarakatController */
/* @var $model FDanaMasyarakat */

$this->breadcrumbs=array(
	'Fdana Masyarakats'=>array('index'),
	$model->id_dana_kegiatan,
);

$this->menu=array(
	array('label'=>'List FDanaMasyarakat', 'url'=>array('index')),
	array('label'=>'Create FDanaMasyarakat', 'url'=>array('create')),
	array('label'=>'Update FDanaMasyarakat', 'url'=>array('update', 'id'=>$model->id_dana_kegiatan)),
	array('label'=>'Delete FDanaMasyarakat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dana_kegiatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FDanaMasyarakat', 'url'=>array('admin')),
);
?>

<h1>View FDanaMasyarakat #<?php echo $model->id_dana_kegiatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dana_kegiatan',
		'id_prodi',
		'id_administrasi',
		'TS',
		'jumlah_judul',
		'total_dana',
	),
)); ?>
