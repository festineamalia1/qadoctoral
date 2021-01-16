<?php
/* @var $this RekruitmenMabaController */
/* @var $model RekruitmenMaba */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Rekruitmen Mahasiswa Baru)'=>array('index'),
	'Detail data Rekruitmen Mahasiswa Baru '.$model->id_rmaba,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah data', 'url'=>array('update', 'id'=>$model->id_rmaba)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rmaba),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Rekruitmen Mahasiswa Baru <?php echo $model->relasi_prodi->nama_prodi; ?> <?echo $model->relasi_administrasi->th_akademik;?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_rmaba',
		//'id_prodi',
		//'id_administrasi',
		array(
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
			),
		array(
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
			),
		'kebijakan_rekruitmen_calon_maba:html',
		'kriteria_seleksi_maba:html',
		'sistem_pengambilan_kptsan:html',
		'prosedur_penerimaan_maba:html',
		'sumber_data:html',
		//'lampiran',
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