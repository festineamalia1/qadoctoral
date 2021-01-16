<?php
/* @var $this PersyaratanPelaksanaanController */
/* @var $model PersyaratanPelaksanaan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Persyaratan Pelaksanaan Disertasi)'=>array('index'),
	$model->id_pp,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_pp)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Persyaratan Pelaksanaan Disertasi #<?php echo $model->id_pp; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_pp',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'p_mukin:html',
		'p_toefl:html',
		'kuliah_ujian:html',
		'ujian_kualifikasi:html',
		'penyaajian_penilaian:html',
		'peraturan_penyajian:html',
		'peraturan_publikasi:html',
		'penilaian:html',
		'tim_penguji:html',
		
		
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


