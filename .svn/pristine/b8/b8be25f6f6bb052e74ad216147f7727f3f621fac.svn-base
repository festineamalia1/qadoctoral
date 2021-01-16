<?php
/* @var $this PenelitianDosentetapPsController */
/* @var $model PenelitianDosentetapPs */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Penelitian dan Judul Penelitian)'=>array('index'),
	$model->id_jum_kegiatan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_jum_kegiatan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jum_kegiatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Penelitian Dosen Tetap PS #<?php echo $model->id_jum_kegiatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_jum_kegiatan',
		// 'id_prodi',
		// 'id_administrasi',
		//'id_prodi',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		//'id_administrasi',
		'sumber_pembiayaan',
		// 'detail_sumber_biaya',
		'waktu_TS2',
		'waktu_TS1',
		'waktu_TS',
		// 'detail_waktu',
		'status',
		// 'detail_status',
		'mhs_terlibat',
		'jum_mhs_ambil_ta',
		'jum_mhs_penelitian',
		'wujud_mhs_pkm',
		'sumber_data',
		// 'id_sumber_data',
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