<?php
/* @var $this Monitoring2Controller */
/* @var $model Monitoring2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 5 (Sistem Monitoring dan Evaluasi)'=>array('index'),
	$model->id_monitoring,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_monitoring)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_monitoring),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detai Data Monitoring dan Evaluasi #<?php echo $model->id_monitoring; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_monitoring',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),

		'pelaksanaan_ujian:html',
		'usul_penelitian:html',
		'penulisan_disertasi:html',
		'kelayakan_dosen:html',
		'ujian_akhir:html',
		/*'lampiran:html',
		'sumber_data:html',*/
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

