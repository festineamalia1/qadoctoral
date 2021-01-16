<?php
/* @var $this DetailEvaluasiLulusanController */
/* @var $model DetailEvaluasiLulusan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Tanggapan Pihak Pengguna Lulusan)'=>array('index'),
	$model->id_detail,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_detail)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_detail),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Tanggapan Pihak Pengguna Lulusan #<?php echo $model->id_detail; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_detail',
		'jenis_kemampuan',
		'tanggap_sangat_baik',
		'tanggap_baik',
		'tanggap_cukup',
		'tanggap_kurang',
		'rencana_tindak_lanjut',
		'ketarangan',
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
