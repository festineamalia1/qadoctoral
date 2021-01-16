<?php
/* @var $this PengisiBorangController */
/* @var $model PengisiBorang */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Pengisi Borang'=>array('index'),
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
	$('#pengisi-borang-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manajemen Data Pengisi Borang</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pengisi-borang-grid',
	'dataProvider'=>$model->search(),
	'itemsCssClass' => 'table table-bordered',
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
		'nama',
		'nidn',
		'jabatan',
		/*
		'tanggal_pengisian',
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
