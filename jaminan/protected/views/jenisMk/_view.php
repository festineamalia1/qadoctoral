<?php
/* @var $this JenisMkController */
/* @var $data JenisMk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mk_kurikulum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mk_kurikulum), array('view', 'id'=>$data->id_mk_kurikulum)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mk')); ?>:</b>
	<?php echo CHtml::encode($data->mk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks')); ?>:</b>
	<?php echo CHtml::encode($data->sks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>