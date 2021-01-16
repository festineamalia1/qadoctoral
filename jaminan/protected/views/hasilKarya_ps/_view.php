<?php
/* @var $this HasilKarya_psController */
/* @var $data HasilKarya_ps */
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ts); ?>
		</td>
	</tr>
	<tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?></b>
		</td>
		<td>
			: <?php echo ($data->judul); ?>
		</td>
	</tr>

	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_dosen->nama_dosen); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('publikasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->publikasi); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_publikasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_publikasi); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('tingkat')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tingkat); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('lembaga_akreditasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->lembaga_akreditasi); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_publikasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tgl_publikasi); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ts); ?>
		</td>
	</tr>

</table>
</div>