<?php
/* @var $this AdministrasiController */
/* @var $model Administrasi */

$this->breadcrumbs=array(
	'Administrasi'=>array('index'),
	$model->id_administrasi,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_administrasi)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_administrasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Administrasi', 'url'=>array('admin')),
);
?>

<h1>Detail Data Administrasi #<?php echo $model->id_administrasi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_administrasi',
		'th_akademik',
		'nama_petugas',
		'th_akreditasi',
		// 'sumber_data',
		// 'lampiran',
	),
)); ?>

<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>