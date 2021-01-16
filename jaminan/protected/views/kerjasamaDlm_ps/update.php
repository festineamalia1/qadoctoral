<?php
/* @var $this KerjasamaDlm_psController */
/* @var $model KerjasamaDlm_ps */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kerjasama Dalam Negri)'=>array('index'),
	$model->id_kerjasama_dlm=>array('view','id'=>$model->id_kerjasama_dlm),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_kerjasama_dlm)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Update Kerjasama Dalam Nagri<?php echo $model->id_kerjasama_dlm; ?></h1>

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