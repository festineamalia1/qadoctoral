<?php
/* @var $this TenagaKependidikanController */
/* @var $model TenagaKependidikan */

$this->breadcrumbs=array(
	'Tenaga Kependidikan'=>array('index'),
	$model->id_tenaga_kependidikan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_tenaga_kependidikan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tenaga_kependidikan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Tenaga Kependidikan #<?php echo $model->id_tenaga_kependidikan; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_tenaga_kependidikan',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'jenis_tenaga',
		'jumS3',
		'jumS2',
		'jumS1',
		'jumD4',
		'jumD3',
		'jumD2',
		'jumD1',
		'jumSMA',
		'jumSMK',
		'unit_kerja',
		'upaya_peningkatan_kompetensi:html',
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