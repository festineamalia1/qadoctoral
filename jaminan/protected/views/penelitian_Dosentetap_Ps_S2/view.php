<?php
/* @var $this Penelitian_Dosentetap_Ps_S2Controller */
/* @var $model Penelitian_Dosentetap_Ps_S2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Penelitian dan Judul Penelitian)'=>array('index'),
	$model->id_penelitian_dosentetap_ps_s2,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_penelitian_dosentetap_ps_s2)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penelitian_dosentetap_ps_s2),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Penelitian dan Judul Penelitian #<?php echo $model->id_penelitian_dosentetap_ps_s2; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_penelitian_dosentetap_ps_s2',
		// 'id_prodi',
		// 'id_administrasi',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'ts',
		'nama_dosen',
		'judul_penelitian',

		// 'tgl_penelitian_awal',
		// 'tgl_penelitian_akhir',
		// 'status_penelitian',
		// 'nama_dosen',
		// 'id_sumber_data',
		// 'sumber_data',
		'biaya',
		'Ts0',
		'Ts1',
		'Ts2',
		//'jumlah_penelitian',
		
		'lampiran',
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