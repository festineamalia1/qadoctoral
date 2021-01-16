<?php
/* @var $this AktivitasDosenTetapSetahunController */
/* @var $model AktivitasDosenTetapSetahun */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Setahuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AktivitasDosenTetapSetahun', 'url'=>array('index')),
	array('label'=>'Manage AktivitasDosenTetapSetahun', 'url'=>array('admin')),
);
?>

<h1>Create AktivitasDosenTetapSetahun</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>