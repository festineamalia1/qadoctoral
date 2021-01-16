<?php
/* @var $this MahasiswaS3Controller */
/* @var $model MahasiswaS3 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Data Mahasiswa S3'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Data Mahasiswa S3', 'url'=>array('index')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Tambah Data</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>