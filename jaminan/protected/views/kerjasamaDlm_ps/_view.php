<?php
/* @var $this KerjasamaDlm_psController */
/* @var $data KerjasamaDlm_ps */
?>


	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('manfaat_dlm')); ?>:</b>
	<?php echo CHtml::encode($data->manfaat_dlm); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />

	*/ ?>


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
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_instansi_dlm')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_instansi_dlm); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_mulai_dlm')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_mulai_dlm); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_akhir_dlm')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akhir_dlm); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kegiatan_dlm')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_kegiatan_dlm); ?>
		</td>
	</tr>
<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('manfaat_dlm')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->manfaat_dlm); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->lampiran); ?>
		</td>
	</tr>
</table>
</div>
