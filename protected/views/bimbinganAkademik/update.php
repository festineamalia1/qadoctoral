<?php
/* @var $this BimbinganAkademikController */
/* @var $model BimbinganAkademik */

$this->breadcrumbs=array(
	'Bimbingan Akademiks'=>array('index'),
	$model->id_bimbingan=>array('view','id'=>$model->id_bimbingan),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Dat', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_bimbingan)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Bimbingan Akademik <?php echo $model->id_bimbingan; ?></h1>
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
