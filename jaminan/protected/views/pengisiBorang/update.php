<?php
/* @var $this PengisiBorangController */
/* @var $model PengisiBorang */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Pengisi Borang'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Ubah Data Pengisi Borang',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data  Pengisi Borang <?php echo $model->id; ?></h1>

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
