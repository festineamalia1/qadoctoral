<?php
/* @var $this MonitoringController */
/* @var $data Monitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_monitoring')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_monitoring), array('view', 'id'=>$data->id_monitoring)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kehadiran_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->kehadiran_dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kehadiran_mhs')); ?>:</b>
	<?php echo CHtml::encode($data->kehadiran_mhs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mek_penyusunan_mk')); ?>:</b>
	<?php echo CHtml::encode($data->mek_penyusunan_mk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->ket_tambahan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>