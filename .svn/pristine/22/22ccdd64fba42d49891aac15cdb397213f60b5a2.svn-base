<?php
/* @var $this PenelitianDosentetapPsController */
/* @var $model PenelitianDosentetapPs */

$this->breadcrumbs=array(
	'Penelitian Dosentetap Ps'=>array('index'),
	$model->id_jum_kegiatan=>array('view','id'=>$model->id_jum_kegiatan),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_jum_kegiatan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Penelitian Dosen Tetap Ps <?php echo $model->id_jum_kegiatan; ?></h1>
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