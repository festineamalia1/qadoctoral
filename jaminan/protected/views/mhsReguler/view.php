<?php
$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 3 (Mahasiswa Reguler)'=>array('index'),
	$model->id_mhs_reguler,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_mhs_reguler)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mhs_reguler),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Mahasiswa Reguler #<?php echo $model->id_mhs_reguler; ?></h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_mhs_reguler',
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
		'thn_akademik',
		'daya_tampung',
		'mhs_ikut_seleksi',
		'mhs_lulus_seleksi',
		'maba_bkn_transfer',
		'maba_transfer',
		'total_mhs_bkn_transfer',
		'total_mhs_transfer',
		'jumlah_lulus_bkn_transfer',
		'jumlah_lulus_transfer',
		'ipk_min_lulusan_reguler',
		'ipk_rata2_lulusan_reguler',
		'ipk_maks_lulusan_reguler',
		'persen_ipk275',
		'persen_ipk275_350',
		'persen_ipk350',
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