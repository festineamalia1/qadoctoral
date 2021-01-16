<?php
/* @var $this PelaksanaanBimbinganTaController */
/* @var $model PelaksanaanBimbinganTa */

$this->breadcrumbs=array(
	'Pelaksanaan Bimbingan TA'=>array('index'),
	$model->id_pelaksanaan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_pelaksanaan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelaksanaan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Pelaksanaan Bimbingan TA #<?php echo $model->id_pelaksanaan; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_pelaksanaan',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'rata_mhs_perdosen',
		'rata_jum_pertemuan',
		'ketersediaan_panduan',
		'sosialisasi_pelaksanaan:html',
		'sumber_data',
		//'id_sumber_data',
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