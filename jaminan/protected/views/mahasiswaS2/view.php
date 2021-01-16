<?php
/* @var $this MahasiswaS2Controller */
/* @var $model MahasiswaS2 */

$this->breadcrumbs=array(
	'Mahasiswa S2s'=>array('index'),
	$model->id_mhs_s2,
);

$this->menu=array(
	array('label'=>'List MahasiswaS2', 'url'=>array('index')),
	array('label'=>'Create MahasiswaS2', 'url'=>array('create')),
	array('label'=>'Update MahasiswaS2', 'url'=>array('update', 'id'=>$model->id_mhs_s2)),
	array('label'=>'Delete MahasiswaS2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mhs_s2),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MahasiswaS2', 'url'=>array('admin')),
);
?>

<h1>View MahasiswaS2 #<?php echo $model->id_mhs_s2; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_mhs_s2',
		'nim_s2',
		'nama_mhs_s2',
		'alamat_mhs',
		'daerah_asal',
		'tgl_lahir',
	),
)); ?>
