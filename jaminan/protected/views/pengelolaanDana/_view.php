<?php
/* @var $this PengelolaanDanaController */
/* @var $data PengelolaanDana */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelola_dana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kelola_dana), array('view', 'id'=>$data->id_kelola_dana)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_dana); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_dana')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_dana); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_dana_TS2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jumlah_dana_TS2); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_dana_TS1')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jumlah_dana_TS1); ?>
		</td>
	</tr>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_dana_TS')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_dana_TS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>