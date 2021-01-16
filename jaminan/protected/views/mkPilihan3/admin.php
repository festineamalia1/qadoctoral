<?php
/* @var $this MkPilihan3Controller */
/* @var $model MkPilihan3 */

$this->breadcrumbs=array(
	'Mk Pilihan3s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MkPilihan3', 'url'=>array('index')),
	array('label'=>'Create MkPilihan3', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mk-pilihan3-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mk Pilihan3s</h1>

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
	'id'=>'mk-pilihan3-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pelaksanaan',
		'id_administrasi',
		'kode_mk',
		'th_pelaksanaan',
		'sumber_data',
		'lampiran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
