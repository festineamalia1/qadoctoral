<?php
/* @var $this KerjasamaLuar_psController */
/* @var $model KerjasamaLuar_ps */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kerjasama dengan instansi luar negri)'=>array('index'),
	'Manajemen Data',
);
$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kerjasama-luar-ps-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Kerjasama dengan instansi luar negri</h1>
<?
	$this->renderPartial('v_manajemen');
?>
<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
 -->
<?php 
// echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kerjasama-luar-ps-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
	'filter'=>$model,
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'columns'=>array(
		// 'id_kerjasama_luar',
		// 'id_prodi',
		// 'id_administrasi',
		array(
			'name'=>'nama_prodi_search',
			'value'=>'$data->relasi_prodi->nama_prodi',
		),
		array(
			'name'=>'th_akademik_search',
			'value'=>'$data->relasi_administrasi->th_akademik',
		),
		'ts',
		'nama_instansi_luar',
		'jenis_kegiatan_luar',
		'th_mulai_luar',
		'th_akhir_luar',
		'manfaat_luar',
		array(      
   'class'=>'CLinkColumn',      
   'header'=>'Unduh File Lampiran',      
   'urlExpression'=>'Yii::app()->request->baseUrl."/file/Lampiran/".$data->lampiran',      
   'label'=>'Unduh',  
  ),  
		/*
		'th_akhir_luar',
		'manfaat_luar',
		'sumber_data',
		'id_sumber_data',
		'lampiran',
		*/
		array(
			'class'=>'CButtonColumn',
		),
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