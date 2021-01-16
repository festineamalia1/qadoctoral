<?php
/* @var $this JenisMkController */
/* @var $model JenisMk */

$this->breadcrumbs=array(
	'Jenis Mks'=>array('index'),
	$model->id_mk_kurikulum=>array('view','id'=>$model->id_mk_kurikulum),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisMk', 'url'=>array('index')),
	array('label'=>'Create JenisMk', 'url'=>array('create')),
	array('label'=>'View JenisMk', 'url'=>array('view', 'id'=>$model->id_mk_kurikulum)),
	array('label'=>'Manage JenisMk', 'url'=>array('admin')),
);
?>

<h1>Update JenisMk <?php echo $model->id_mk_kurikulum; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>