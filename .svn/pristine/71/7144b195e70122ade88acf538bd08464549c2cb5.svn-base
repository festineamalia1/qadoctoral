<?php
/* @var $this SuasanaAkademikController */
/* @var $model SuasanaAkademik */

$this->breadcrumbs=array(
	'Suasana Akademik'=>array('index'),
	$model->id_suasana,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_suasana)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_suasana),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Suasana Akademik #<?php echo $model->id_suasana; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_suasana',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'kebijakan:html',
		'sarana_dana:html',
		'kegiatan:html',
		'interaksi:html',
		'pengembangan_perilaku:html',
		'ket_lainnya',
		'F_pembelajaran:html',
		'F_suasana_akademik:html',
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
