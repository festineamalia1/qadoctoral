<?php
/* @var $this JmlMahasiswaS2Controller */
/* @var $model JmlMahasiswaS2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Profil Mahasiswa dan Lulusan)'=>array('index'),
	$model->id_jml_mhs_s2=>array('view','id'=>$model->id_jml_mhs_s2),
	'Ubah Data Profil Mahasiswa dan Lulusan',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_jml_mhs_s2)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Profil Mahasiswa dan Lulusan <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>