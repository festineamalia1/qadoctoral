<?php
/* @var $this EvaluasiLulusanController */
/* @var $model EvaluasiLulusan */

$this->breadcrumbs=array(
	'Evaluasi Lulusan'=>array('index'),
	$model->id_evaluasi,
);

$this->menu=array(
	array('label'=>'Tampilkan Dat', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_evaluasi)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_evaluasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Evaluasi Lulusan #<?php echo $model->id_evaluasi; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_evaluasi',
		//'id_prodi',
		//'id_administrasi',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'studi_pelacakan',
		'metode',
		'proses',
		'mekanisme_kegiatan',
		'tindak_lanjut',
		'hasil',
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

