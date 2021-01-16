<?php
/* @var $this PengabdianController */
/* @var $model pengabdian */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kegiatan pelayanan/pengabdian kepada masyarakat)'=>array('index'),
	$model->id_pengabdian=>array('view','id'=>$model->id_pengabdian),
	'Ubah Data',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_pengabdian)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat <?php echo $model->id_pengabdian; ?></h1>

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