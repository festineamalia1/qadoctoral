<?php
/* @var $this KualifikasiKompetensiController */
/* @var $data KualifikasiKompetensi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kualifikasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kualifikasi), array('view', 'id'=>$data->id_kualifikasi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upaya_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->upaya_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />


</div>