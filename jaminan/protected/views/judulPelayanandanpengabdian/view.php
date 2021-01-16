<?php
/* @var $this JudulPelayanandanpengabdianController */
/* @var $model JudulPelayanandanpengabdian */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Judul dan hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat)'=>array('index'),
	$model->id_pelayana,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_pelayana)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelayana),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Judul dan hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat #<?php echo $model->id_pelayana; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array (
			'name'=>'nama_prodi_search',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'th_akademik_search',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		array (
			'name'=>'nama_dosen_search',
			'value'=>$model->relasi_dosen->nama_dosen,
		),
		'ts',
		// 'id_pelayana',
		// 'id_administrasi',
		// 'id_prodi',
		'judul_kegiatan_pengabdian',
		'wkt_awl',
		'wkt_akh',
		'hasil',

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
