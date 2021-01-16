<?php
/* @var $this ProsesBimbinganController */
/* @var $data ProsesBimbingan */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proses')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_proses), array('view', 'id'=>$data->id_proses)); ?>
	<br /> -->

<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kebijakan_pembimbingan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kebijakan_pembimbingan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('mekanisme_penunjukkan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->mekanisme_penunjukkan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('proses_pembimbingan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->proses_pembimbingan); ?>
		</td>
	</tr>

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>