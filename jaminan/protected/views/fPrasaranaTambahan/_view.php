<?php
/* @var $this FPrasaranaTambahanController */
/* @var $data FPrasaranaTambahan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prasarana_tambahan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prasarana_tambahan), array('view', 'id'=>$data->id_prasarana_tambahan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_prasarana_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_prasarana_tambahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investasi_prasarana')); ?>:</b>
	<?php echo CHtml::encode($data->investasi_prasarana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rencana_investasis')); ?>:</b>
	<?php echo CHtml::encode($data->rencana_investasis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_dana); ?>
	<br />


</div>