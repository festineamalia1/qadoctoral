<?php
/* @var $this KerjasamaLuar_psController */
/* @var $data KerjasamaLuar_ps */
?>

<div class="view">
	

	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kerjasama_luar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kerjasama_luar), array('view', 'id'=>$data->id_kerjasama_luar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_instansi_luar')); ?>:</b>
	<?php echo CHtml::encode($data->nama_instansi_luar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kegiatan_luar')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kegiatan_luar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('th_mulai_luar')); ?>:</b>
	<?php echo CHtml::encode($data->th_mulai_luar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('th_akhir_luar')); ?>:</b>
	<?php echo CHtml::encode($data->th_akhir_luar); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('manfaat_luar')); ?>:</b>
	<?php echo CHtml::encode($data->manfaat_luar); ?>
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

</div>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_instansi_luar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_instansi_luar); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_mulai_luar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_mulai_luar); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_akhir_luar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akhir_luar); ?>
		</td>
	</tr>
		<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kegiatan_luar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_kegiatan_luar); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('manfaat_luar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->manfaat_luar); ?>
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


