<?php
/* @var $this PakarController */
/* @var $model Pakar */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Pengalaman Dosen)'=>array('index'),
	$model->id_pakar,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_pakar)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pakar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Pengalaman Dosen #<?php echo $model->id_pakar; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_pakar',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		array (
			'name'=>'Nama Dosen',
			'value'=>$model->relasi_dosen->nama_dosen,
		),
		// 'nama_dosen',
		'nama_lembaga',
		'kurun_waktu',
		'tingkat',
		'sebagai',
		'sumber_data',
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