<?php
/* @var $this Pengabdi_s2Controller */
/* @var $model Pengabdi_s2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kegiatan pelayanan/pengabdian kepada masyarakat)'=>array('index'),
	$model->id_pengabdian,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_pengabdian)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pengabdian),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat  #<?php echo $model->id_pengabdian; ?></h1>

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
		// 'id_pengabdian',
		// 'id_administrasi',
		// 'id_prodi',
		'sumber_biaya',
		'judul_pengabdian',
		'waktu_ts',
		'waktu_ts1',
		'waktu_ts2',
		//'jumlah_kegiatan',

		// 'mhsiswa_terlibat_kegiatan',
		// 'judul_pengabdian',
		// 'id_sumber_data',
		// 'sumber_data',
		// 'lampiran',
		// 'detail_sumber_biaya',
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

