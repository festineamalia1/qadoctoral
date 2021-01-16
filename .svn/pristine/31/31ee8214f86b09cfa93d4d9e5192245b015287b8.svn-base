<?php
/* @var $this AktivitasDosenSetahunController */
/* @var $model AktivitasDosenSetahun */

$this->breadcrumbs=array(
	'Aktivitas Dosen Setahun'=>array('index'),
	$model->id_aktivitas_setahun=>array('view','id'=>$model->id_aktivitas_setahun),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_aktivitas_setahun)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Aktivitas Dosen Setahun <?php echo $model->id_aktivitas_setahun; ?></h1>
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