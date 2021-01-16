<?php
/* @var $this FDanaPenelitianController */
/* @var $data FDanaPenelitian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dana), array('view', 'id'=>$data->id_dana)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TS')); ?>:</b>
	<?php echo CHtml::encode($data->TS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_judul')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_dana')); ?>:</b>
	<?php echo CHtml::encode($data->total_dana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian_pimpinan')); ?>:</b>
	<?php echo CHtml::encode($data->uraian_pimpinan); ?>
	<br />


</div>