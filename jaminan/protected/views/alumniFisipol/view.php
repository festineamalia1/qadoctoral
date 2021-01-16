<?php
/* @var $this AlumniFisipolController */
/* @var $model AlumniFisipol */

$this->breadcrumbs=array(
	'Alumni Fisipols'=>array('index'),
	$model->almNiu,
);

$this->menu=array(
	array('label'=>'List AlumniFisipol', 'url'=>array('index')),
	array('label'=>'Create AlumniFisipol', 'url'=>array('create')),
	array('label'=>'Update AlumniFisipol', 'url'=>array('update', 'id'=>$model->almNiu)),
	array('label'=>'Delete AlumniFisipol', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->almNiu),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AlumniFisipol', 'url'=>array('admin')),
);
?>

<h1>View AlumniFisipol #<?php echo $model->almNiu; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'almNiu',
		'almNim',
		'almNama',
		'almAngkatan',
		'almProdiKode',
		'almProdiKodeUniv',
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
	),
)); ?>
