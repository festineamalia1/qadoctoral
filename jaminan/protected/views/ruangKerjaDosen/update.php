<?php
/* @var $this RuangKerjaDosenController */
/* @var $model RuangKerjaDosen */

$this->breadcrumbs=array(
	'Ruang Kerja Dosens'=>array('index'),
	$model->id_ruang_dosen=>array('view','id'=>$model->id_ruang_dosen),
	'Update',
);

$this->menu=array(
	array('label'=>'Tampil Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_ruang_dosen)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update RuangKerjaDosen <?php echo $model->id_ruang_dosen; ?></h1>
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

