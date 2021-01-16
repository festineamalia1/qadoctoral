<?php
/* @var $this PenjelasanPendekatandanpemikiran_ps_s2Controller */
/* @var $model PenjelasanPendekatandanpemikiran_ps_s2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Pendekatan dan Pemikiran Baru Penelitian Dosen dan Mahasiswa)'=>array('index'),
	$model->id_penjelasan_pendekatan,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_penjelasan_pendekatan)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penjelasan_pendekatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Pendekatan dan Pemikiran Baru Penelitian Dosen dan Mahasiswa #<?php echo $model->id_penjelasan_pendekatan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id_penjelasan_pendekatan',
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
		'jenis_penelitian',
		'judul_penelitian',
		'penjelasan_pendekatandanpemikiran',
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