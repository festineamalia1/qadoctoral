<?php
/* @var $this KerjasamaLuar_psController */
/* @var $model KerjasamaLuar_ps */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kerjasama dengan instansi luar negri)'=>array('index'),
	$model->id_kerjasama_luar,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_kerjasama_luar)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kerjasama_luar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Menejemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Kerjasama dengan instasi luar negri #<?php echo $model->id_kerjasama_luar; ?></h1>

<?
	$this->renderPartial('v_manajemen');
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		// 'id_kerjasama_luar',
		// 'id_prodi',
		// 'id_administrasi',
		'nama_instansi_luar',
		'jenis_kegiatan_luar',
		'th_mulai_luar',
		'th_akhir_luar',
		'manfaat_luar',
		'ts',
		 // 'sumber_data',
		// 'id_sumber_data',
		'lampiran',
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