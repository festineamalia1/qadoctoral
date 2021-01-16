<?php
/* @var $this AktivitasDosenTetapSemesterController */
/* @var $model AktivitasDosenTetapSemester */

$this->breadcrumbs=array(
	'Aktivitas Dosen Tetap Semester'=>array('index'),
	$model->id_aktivitas=>array('view','id'=>$model->id_aktivitas),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detal Data', 'url'=>array('view', 'id'=>$model->id_aktivitas)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Aktivitas Dosen Tetap Semester <?php echo $model->id_aktivitas; ?></h1>
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