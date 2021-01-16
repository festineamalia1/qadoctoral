<?php
/* @var $this AgendadanpenelitiaController */
/* @var $model Agendadanpenelitia */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Agenda dan Penelitian Dosen Tetap)'=>array('index'),
	'Manajemen Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agendadanpenelitia-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data agenda dan Penelitian Dosen Tetap</h1>
<?
	$this->renderPartial('v_manajemen');
?>

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
	'id'=>'agendadanpenelitia-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'filter'=>$model,
	'columns'=>array(
		// 'id_agenda',
		// 'id_administrasi',
		// 'id_prodi',
		array(
			'name'=>'nama_prodi_search',
			'value'=>'$data->relasi_prodi->nama_prodi',
		),
		array(
			'name'=>'th_akademik_search',
			'value'=>'$data->relasi_administrasi->th_akademik',
		),
		'ts',
		array(
			'name'=>'nama_dosen_search',
			'value'=>'$data->relasi_dosen->nama_dosen',
		),
		'judul_penelitian:html',
		'agenda_penelitian',
		'keterlibatan_penelitian',
		// 'jabatan_penelitian',
		/*

		'id_sumber_data',
		'sumber_data',
		'lampiran',
		'id_prodi',
		'id_administrasi',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>