<?php
/* @var $this DampakPenelitian_psController */
/* @var $model DampakPenelitian_ps */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7(Penjelasan Dampak Penelitian Penelitian Dosen)'=>array('index'),
	$model->id_dampakpenelitian,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_dampakpenelitian)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dampakpenelitian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Penjelasan Dampak Penelitian Dosen #<?php echo $model->id_dampakpenelitian; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_dampakpenelitian',
		//'id_prodi',
		//'id_administrasi',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'judul_penelitian',
		'jenis_penelitian',
		'damp_produktifitas',
		'damp_kesejahteraan_masyarakat',
		'damp_mutu_lingkungan',
		// 'id_sumber_data',
		// 'sumber_data',
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
