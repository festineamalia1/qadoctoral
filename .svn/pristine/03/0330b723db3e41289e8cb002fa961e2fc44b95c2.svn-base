<?php
/* @var $this RuangKerjaDosenController */
/* @var $model RuangKerjaDosen */

$this->breadcrumbs=array(
	'Ruang Kerja Dosens'=>array('index'),
	$model->id_ruang_dosen,
);

$this->menu=array(
	array('label'=>'List RuangKerjaDosen', 'url'=>array('index')),
	array('label'=>'Create RuangKerjaDosen', 'url'=>array('create')),
	array('label'=>'Update RuangKerjaDosen', 'url'=>array('update', 'id'=>$model->id_ruang_dosen)),
	array('label'=>'Delete RuangKerjaDosen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ruang_dosen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RuangKerjaDosen', 'url'=>array('admin')),
);
?>

<h1>View RuangKerjaDosen #<?php echo $model->id_ruang_dosen; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'ruang_kerja_dosen:html',
		'jumlah_ruang:html',
		'luas:html',
	),
)); ?>
