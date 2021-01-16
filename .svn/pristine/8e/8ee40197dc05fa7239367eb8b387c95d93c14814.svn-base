<?php
/* @var $this AdministrasiController */
/* @var $model Administrasi */

$this->breadcrumbs=array(
	'Administrasi'=>array('index'),
	$model->id_administrasi=>array('view','id'=>$model->id_administrasi),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_administrasi)),
	array('label'=>'Manajemen Administrasi', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Administrasi <?php echo $model->id_administrasi; ?></h1>

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