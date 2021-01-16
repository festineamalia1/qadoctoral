<?php
/* @var $this PengabdianController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Manajemen Data'=>array('site/manajemen'),
	'Standar 7 (Kegiatan pelayanan/pengabdian kepada masyarakat)',
);

$this->menu=array(
	array('label'=>'Tambah Data', 'url'=>array('create')),
	array('label'=>'Manajemen Data', 'url'=>array('admin')),
);
?>

<h1>Hasil/dampak kegiatan pelayanan/pengabdian kepada masyarakat</h1>
<?
	$this->renderPartial('v_manajemen');
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'summaryText' => 'Menampilkan {start} - {end} dari {count} data',
	'itemView'=>'_view',
)); ?>

<script type="text/javascript">
	$(function(){
		var manajemen = "<?=$manajemen?>";
		if(manajemen == 'manajemen'){
			$('.site-sidebar').parent().addClass('hide');
			$('.content-after-sidebar').removeClass('span9');
		}
	});
</script>
