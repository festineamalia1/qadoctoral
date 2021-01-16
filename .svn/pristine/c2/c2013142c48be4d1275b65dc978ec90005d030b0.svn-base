<?php
$this->breadcrumbs=array(
	'Tata Pamong'=>array('index'),
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
	$.fn.yiiGridView.update('tata-pamong-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Tata Pamong</h1>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php 
	// echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tata-pamong-grid',
	'dataProvider'=>$model->search(),
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'nama_prodi_search',
			'value'=>'$data->relasi_prodi->nama_prodi',
		),
		array(
			'name'=>'th_akademik_search',
			'value'=>'$data->relasi_administrasi->th_akademik',
		),
		// 'id_tata_pamong',
		// 'id_prodi',
		// 'id_administrasi',
		'sistem_tata_pamong:html',
		'kepemimpinan:html',
		'sistem_pengelolaan:html',
		
		/*
		'penjaminan_mutu',
		'umpan_balik_dosen',
		'tindak_lanjut_dosen',
		'umpan_balik_mhs',
		'tindak_lanjut_mhs',
		'umpan_balik_alumni',
		'tindak_lanjut_alumni',
		'umpan_balik_lulusan',
		'tindak_lanjut_lulusan',
		'animo_calon_mhs',
		'mutu_manajemen',
		'mutu_lulusan',
		'kerjasama_kemitraan',
		'hibah_kompetitif',
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