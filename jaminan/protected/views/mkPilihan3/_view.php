<?php
/* @var $this MkPilihan3Controller */
/* @var $data MkPilihan3 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelaksanaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelaksanaan), array('view', 'id'=>$data->id_pelaksanaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mk')); ?>:</b>
	<?php echo CHtml::encode($data->kode_mk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('th_pelaksanaan')); ?>:</b>
	<?php echo CHtml::encode($data->th_pelaksanaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />


</div>