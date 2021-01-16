<?php
/* @var $this TracerStudyController */
/* @var $model TracerStudy */

$this->breadcrumbs=array(
	'Tracer Studies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TracerStudy', 'url'=>array('index')),
	array('label'=>'Create TracerStudy', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tracer-study-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tracer Studies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tracer-study-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tracer',
		'id_prodi',
		'id_administrasi',
		'jenis_kemampuan',
		'sangat_baik',
		'baik',
		/*
		'cukup',
		'kurang',
		'tindak_lanjut',
		'rata2_wkt_tunggu',
		'persen_kerja_bidang',
		'sumber_data',
		'lampiran',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
