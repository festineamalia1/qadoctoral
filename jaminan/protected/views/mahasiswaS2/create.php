<?php
/* @var $this MahasiswaS2Controller */
/* @var $model MahasiswaS2 */

$this->breadcrumbs=array(
	'Mahasiswa S2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MahasiswaS2', 'url'=>array('index')),
	array('label'=>'Manage MahasiswaS2', 'url'=>array('admin')),
);
?>

<h1>Create MahasiswaS2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>