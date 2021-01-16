<?php
/* @var $this AdministrasiController */
/* @var $model Administrasi */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Administrasi'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Manajemen Administrasi', 'url'=>array('admin')),
);
?>

<h1>Tambah Data Administrasi</h1>

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