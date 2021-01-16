<?php
$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 1 (Visi Misi)'=>array('index'),
	'Manajemen Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
);

// Yii::app()->clientScript->registerScript('search', "
// $('.search-button').click(function(){
// 	$('.search-form').toggle();
// 	return false;
// });
// $('.search-form form').submit(function(){
// 	$.fn.yiiGridView.update('visi-misi-grid', {
// 		data: $(this).serialize()
// 	});
// 	return false;
// });
// ");
?>

<h1>Manajemen Data Visi Misi</h1>

<?php 
	// echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); 
?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visi-misi-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'filter'=>$model,
	'columns'=>array(
		// tambahan
		array(
			'name'=>'nama_prodi_search',
			'value'=>'$data->relasi_prodi->nama_prodi',
		),
		array(
			'name'=>'th_akademik_search',
			'value'=>'$data->relasi_administrasi->th_akademik',
		),
		// end tambahan
		// 'id_visi_misi',
		// 'id_prodi',
		// 'mekanisme',
		'visi:html',
		// 'misi',
		// 'tujuan',
		
		/*
		'sasaran',
		'strategi',
		'sosialisasi',
		'id_administrasi',
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
