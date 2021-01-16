<?php
/* @var $this FSaranaTambahanController */
/* @var $data FSaranaTambahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sarana_tambahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sarana_tambahan), array('view', 'id'=>$data->id_sarana_tambahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investasi_sarana')); ?>:</b>
	<?php echo CHtml::encode($data->investasi_sarana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rencana_investasi')); ?>:</b>
	<?php echo CHtml::encode($data->rencana_investasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_dana); ?>
	<br />


</div>