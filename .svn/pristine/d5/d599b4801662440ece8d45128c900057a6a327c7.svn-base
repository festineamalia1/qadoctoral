<?php
$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Mahasiswa Reguler)'=>array('index'),
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
	$.fn.yiiGridView.update('mhs-reguler-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Mahasiswa Reguler</h1>

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
	'id'=>'mhs-reguler-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'filter'=>$model,
	'columns'=>array(
		// 'id_mhs_reguler',
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
		'thn_akademik',
		'daya_tampung',
		'mhs_ikut_seleksi',
		'mhs_lulus_seleksi',
		
		/*
		'maba_bkn_transfer',
		'maba_transfer',
		'total_mhs_bkn_transfer',
		'total_mhs_transfer',
		'jumlah_lulus_bkn_transfer',
		'jumlah_lulus_transfer',
		'ipk_min_lulusan_reguler',
		'ipk_rata2_lulusan_reguler',
		'ipk_maks_lulusan_reguler',
		'persen_ipk275',
		'persen_ipk275_350',
		'persen_ipk350',
		'sumber_data',
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
