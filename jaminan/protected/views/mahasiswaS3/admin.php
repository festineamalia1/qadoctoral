<?php
/* @var $this MahasiswaS3Controller */
/* @var $model MahasiswaS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Data Mahasiswa S3'=>array('index'),
	'Manajemen Data',
);

$this->menu=array(
	array('label'=>'Data Mahasiswa S3', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mahasiswa-s3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Mahasiswa S3</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mahasiswa-s3-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'filter'=>$model,
	'columns'=>array(
		'NIU',
		'NIF',
		'nama_mhs_s3',
		'alamat_mhs',
		'daerah_asal',
		'tgl_lahir',
		/*
		'id_administrasi',
		'id_prodi',
		'jenis_kelamin',
		'warga_negara',
		'niu_s3',
		'status',
		'pekerjaan',
		'tgl_masuk',
		'nama_ortu',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
