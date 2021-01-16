<?php
/* @var $this KerjasamaDlm_psController */
/* @var $model KerjasamaDlm_ps */

$this->breadcrumbs=array(
	
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kerjasama Dalam Negri)'=>array('index'),
	$model->id_kerjasama_dlm,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_kerjasama_dlm)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_kerjasama_dlm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Kerjasama Dalam Negri  #<?php echo $model->id_kerjasama_dlm; ?></h1>
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
		// 'id_kerjasama_dlm',
		// 'id_prodi',
		// 'id_administrasi',
		'nama_instansi_dlm',
		'jenis_kegiatan_dlm',
		'th_mulai_dlm',
		'th_akhir_dlm',
		'manfaat_dlm',
		// 'sumber_data',
		'ts',
		'lampiran'
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