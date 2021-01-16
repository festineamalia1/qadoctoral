<?php
/* @var $this TesisMhs_ps_S2Controller */
/* @var $model TesisMhs_ps_S2 */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Judul Tesis Mahasiswa S2)'=>array('index'),
	$model->id_tesis=>array('view','id'=>$model->id_tesis),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambahkan Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_tesis)),
	array('label'=>'Manjemen Data', 'url' =>array('admin')),
);
?>

<h1>Ubah Data Judul Tesis Mahasiswa S2<?php echo $model->id_tesis; ?></h1>

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