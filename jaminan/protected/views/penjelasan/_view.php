<?php
/* @var $this PenjelasanController */
/* @var $data penjelasan */
?>

<div class="view">
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
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_penelitian_dosentetap_s2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_penelitian); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('penjelasan_pendekatandanpemikiran')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->penjelasan_pendekatandanpemikiran); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_penelitian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_penelitian); ?>
		</td>
	</tr>
</table>
</div>