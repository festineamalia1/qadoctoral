<?php
/* @var $this MhsNonRegulerController */
/* @var $model MhsNonReguler */

$this->breadcrumbs=array(
	'Mahasiswa Non Reguler'=>array('index'),
	$model->id_mhs_nonreg=>array('view','id'=>$model->id_mhs_nonreg),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_mhs_nonreg)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Mahasiswa Non Reguler <?php echo $model->id_mhs_nonreg; ?></h1>
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
