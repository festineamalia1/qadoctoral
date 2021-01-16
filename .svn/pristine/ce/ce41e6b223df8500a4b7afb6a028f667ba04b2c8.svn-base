<?php
/* @var $this AktivitasDosenTetapSemesterController */
/* @var $model AktivitasDosenTetapSemester */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Semester'=>array('index'),
	$model->id_aktivitas,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_aktivitas)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_aktivitas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Aktivitas Dosen Tetap Semester #<?php echo $model->id_aktivitas; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_aktivitas',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'nama_dosen_tetap',
		'sks_PSsendiri',
		'sks_PSlain_PTsendiri',
		'sks_PSPTlain',
		'sks_penelitian',
		'sks_pkm',
		'sks_manajemen_PTsendiri',
		'sks_manajemen_PTlain',
		'jum_sks',
		'sumber_data',
		'lampiran',
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