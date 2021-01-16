<?php
/* @var $this KualifikasiKompetensiController */
/* @var $model KualifikasiKompetensi */

$this->breadcrumbs=array(
	'Kualifikasi Kompetensis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KualifikasiKompetensi', 'url'=>array('index')),
	array('label'=>'Manage KualifikasiKompetensi', 'url'=>array('admin')),
);
?>

<h1>Create KualifikasiKompetensi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>