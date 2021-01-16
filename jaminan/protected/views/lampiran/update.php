<?php
/* @var $this LampiranController */
/* @var $model Lampiran */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Lampiran'=>array('index'),
	$model->lampiran_id=>array('view','id'=>$model->lampiran_id),
	'Ubah Data Lampiran',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->lampiran_id)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Lampiran <?php echo $model->lampiran_id; ?></h1>

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
