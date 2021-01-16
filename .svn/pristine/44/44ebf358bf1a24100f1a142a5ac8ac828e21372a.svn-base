<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->id_prodi,
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'Update Prodi', 'url'=>array('update', 'id'=>$model->id_prodi)),
	array('label'=>'Delete Prodi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prodi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>View Prodi #<?php echo $model->id_prodi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prodi',
		'id_administrasi',
		'nama_prodi',
		'jurusan',
		'no_sk',
		'tgl_sk',
		'pejabat_sk',
		'bln_thn_PS',
		'no_sk_operasional',
		'tgl_sk_operasional',
		'nilai_akreditasi_akhir',
		'no_sk_BANPT',
		'alamat_PS',
		'telp_PS',
		'fax_PS',
		'homepage_PS',
		'email_PS',
		'sumber_data',
		'lampiran',
	),
)); ?>
