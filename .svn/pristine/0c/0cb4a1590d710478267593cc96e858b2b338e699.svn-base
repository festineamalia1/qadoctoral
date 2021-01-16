<?php
/* @var $this PerbaikanPembelajaranController */
/* @var $model PerbaikanPembelajaran */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Perbaikan Pembelajaran)'=>array('index'),
	$model->id_perbaikan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_perbaikan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_perbaikan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Perbaikan Pembelajaran #<?php echo $model->id_perbaikan; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_perbaikan',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'materi_tindakan:html',
		'materi_hasil:html',
		'metode_tindakan:html',
		'metode_hasil:html',
		'teknologi_tindakan:html',
		'teknologi_hasil:html',
		'evaluasi_tindakan:html',
		'evaluasi_hasil:html',
		'lainnya',
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
