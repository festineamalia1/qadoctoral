<?php
/* @var $this DataDosenController */
/* @var $model DataDosen */

$this->breadcrumbs=array(
	'Data Dosen'=>array('index'),
	$model->id_dosen,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_dosen)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dosen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Dosen #<?php echo $model->id_dosen; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_dosen',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'nama_dosen',
		'Nidn',
		'tgl_lahir',
		'jabatan_akademik',
		'gelar_akademik',
		'F_gelar_akademik_terakhir',
		'pendidikanS1',
		'pendidikanS2',
		'pendidikanS3',
		'asal_PTS1',
		'asal_PTS2',
		'asal_PTS3',
		'bidang_keahlianS1',
		'bidang_keahlianS2',
		'bidang_keahlianS3',
		'status_dosen',
		'status_bidang',
		'sumber_data',
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

