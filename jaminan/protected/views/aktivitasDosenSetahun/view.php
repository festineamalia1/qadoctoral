<?php
/* @var $this AktivitasDosenSetahunController */
/* @var $model AktivitasDosenSetahun */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 4 (Aktivitas Dosen Setahun)'=>array('index'),
	$model->id_aktivitas_setahun,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_aktivitas_setahun)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_aktivitas_setahun),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Aktivitas Dosen Setahun #<?php echo $model->id_aktivitas_setahun; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_aktivitas_setahun',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'nama_dosen',
		'bidang_keahlian',
		'kode_mk',
		'nama_mk',
		'jum_kelas',
		'jum_rencana_pertemuan',
		'jum_pertemuan_terlaksana',
		'status_dosen',
		'status_bidang',
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