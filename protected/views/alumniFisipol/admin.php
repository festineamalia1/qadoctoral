<?php
/* @var $this AlumniFisipolController */
/* @var $model AlumniFisipol */

$this->breadcrumbs=array(
	'Alumni Fisipols'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AlumniFisipol', 'url'=>array('index')),
	array('label'=>'Create AlumniFisipol', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#alumni-fisipol-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Alumni Fisipols</h1>

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
	'id'=>'alumni-fisipol-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'almNiu',
		'almNim',
		'almNama',
		'almAngkatan',
		'almProdiKode',
		'almProdiKodeUniv',
		/*
		'almTglMasuk',
		'almTglLulus',
		'almCuti',
		'almLulusTahun',
		'almLulusBulan',
		'almSKS',
		'almIPK',
		'almTOEFEL',
		'almStatusLulus',
		'almKodeLulus',
		'almNoIjasah',
		'almJudulSkripsi',
		'almPembimbing1',
		'almPembimbing2',
		'almPembimbing3',
		'almJenisKelamin',
		'almAlamatEmail',
		'almAgama',
		'almTempatLahir',
		'almTglLahir',
		'almBlnLahir',
		'almThnLahir',
		'almAlamat',
		'almTlp',
		'almStatusKawin',
		'almPekerjaan',
		'almWargaNegara',
		'almBiaya',
		'almKetBiaya',
		'almNamaOrtu',
		'almPekerjaanOrtu',
		'almAlamatOrtu',
		'almStakmhsrKode',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
