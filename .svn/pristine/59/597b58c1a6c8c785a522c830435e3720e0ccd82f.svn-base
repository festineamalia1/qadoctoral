<?php
$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 1 (Visi Misi)'=>array('index'),
	$model->id_visi_misi=>array('view','id'=>$model->id_visi_misi),
	'Ubah Data Visi Misi',
);

$this->menu=array(
	array('label'=>'Tampilkan Data', 'url'=>array('index')),
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Detail Data', 'url'=>array('view', 'id'=>$model->id_visi_misi)),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Ubah Data Visi Misi <?php echo $model->id_visi_misi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'administrasi'=>$administrasi)); ?>

<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>
