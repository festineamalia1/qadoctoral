<?php
/* @var $this FDanaTridarmaController */
/* @var $data FDanaTridarma */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_dana')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_dana); ?>
	<br />


</div>