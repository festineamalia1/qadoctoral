<?php
/* @var $this MahasiswaS3Controller */
/* @var $model MahasiswaS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Mahasiswa S3'=>array('index'),
	$model->id_mhs_s3=>array('view','id'=>$model->id_mhs_s3),
	'Ubah data',
);

$this->menu=array(
	array('label'=>'Data Mahasiswa S3', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_mhs_s3)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Mahasiswa NIU <?php echo $model->NIU; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>