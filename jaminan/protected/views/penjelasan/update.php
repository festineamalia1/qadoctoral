<?php
/* @var $this PenjelasanController */
/* @var $model penjelasan */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Pendekatan dan Pemikiran Baru Penelitian Dosen dan Mahasiswa)'=>array('index'),
	$model->id_penjelasan_pendekatan=>array('view','id'=>$model->id_penjelasan_pendekatan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_penjelasan_pendekatan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Pendekatan dan Pemikiran Baru Penelitian Dosen  dan Mahasiswa<?php echo $model->id_penjelasan_pendekatan; ?></h1>

<?
	$this->renderPartial('v_manajemen');
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>