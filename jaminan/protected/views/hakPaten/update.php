<?php
/* @var $this RekruitmenMabaController */
/* @var $model RekruitmenMaba */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Hak Paten'=>array('index'),
	$model->id_paten=>array('view','id'=>$model->id_paten),
	'Ubah Data Rekruitmen Mahasiswa Baru',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_paten)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Hak Paten #<?php echo $model->id_paten; ?>
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