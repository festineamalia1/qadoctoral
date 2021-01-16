<?php
/* @var $this MahasiswaS2Controller */
/* @var $model MahasiswaS2 */

$this->breadcrumbs=array(
	'Mahasiswa S2s'=>array('index'),
	$model->id_mhs_s2=>array('view','id'=>$model->id_mhs_s2),
	'Update',
);

$this->menu=array(
	array('label'=>'List MahasiswaS2', 'url'=>array('index')),
	array('label'=>'Create MahasiswaS2', 'url'=>array('create')),
	array('label'=>'View MahasiswaS2', 'url'=>array('view', 'id'=>$model->id_mhs_s2)),
	array('label'=>'Manage MahasiswaS2', 'url'=>array('admin')),
);
?>

<h1>Update MahasiswaS2 <?php echo $model->id_mhs_s2; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>