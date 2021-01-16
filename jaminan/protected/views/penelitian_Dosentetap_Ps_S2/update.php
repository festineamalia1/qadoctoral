<?php
/* @var $this Penelitian_Dosentetap_Ps_S2Controller */
/* @var $model Penelitian_Dosentetap_Ps_S2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Penelitian dan Judul Penelitian)'=>array('index'),
	$model->id_penelitian_dosentetap_ps_s2=>array('view','id'=>$model->id_penelitian_dosentetap_ps_s2),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_penelitian_dosentetap_ps_s2)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Penelitian dan Judul Penelitian<?php echo $model->id_penelitian_dosentetap_ps_s2; ?></h1>

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