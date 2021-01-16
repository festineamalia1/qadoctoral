<?php
$this->breadcrumbs=array(
	'Tata Pamong'=>array('index'),
	$model->id_tata_pamong,
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Ubah Data', 'url'=>array('update', 'id'=>$model->id_tata_pamong)),
	array('label'=>'Hapus Data', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tata_pamong),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Detail Data Tata Pamong <?php echo $model->id_tata_pamong; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_tata_pamong',
		array (
			'name'=>'Nama Prodi',
			'value'=>$model->relasi_prodi->nama_prodi,
		),
		array (
			'name'=>'Tahun Akademik',
			'value'=>$model->relasi_administrasi->th_akademik,
		),
		'sistem_tata_pamong:html',
		'kepemimpinan:html',
		'sistem_pengelolaan:html',
		'penjaminan_mutu:html',
		'umpan_balik_dosen:html',
		'tindak_lanjut_dosen:html',
		'umpan_balik_mhs:html',
		'tindak_lanjut_mhs:html',
		'umpan_balik_alumni:html',
		'tindak_lanjut_alumni:html',
		'umpan_balik_lulusan:html',
		'tindak_lanjut_lulusan:html',
		'animo_calon_mhs:html',
		'mutu_manajemen:html',
		'mutu_lulusan:html',
		'kerjasama_kemitraan:html',
		'hibah_kompetitif:html',
		'sumber_data',
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