<?php
/* @var $this PenelitianDosentetapPsController */
/* @var $data PenelitianDosentetapPs */
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_pembiayaan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_pembiayaan); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('detail_sumber_biaya')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->detail_sumber_biaya); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_TS')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_TS); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_TS1')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_TS2); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_TS2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_TS2); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->status); ?>
		</td>
	</tr>

</table>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_TS')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_TS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_waktu')); ?>:</b>
	<?php echo CHtml::encode($data->detail_waktu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_status')); ?>:</b>
	<?php echo CHtml::encode($data->detail_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mhs_terlibat')); ?>:</b>
	<?php echo CHtml::encode($data->mhs_terlibat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_mhs_ambil_ta')); ?>:</b>
	<?php echo CHtml::encode($data->jum_mhs_ambil_ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_mhs_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->jum_mhs_penelitian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wujud_mhs_pkm')); ?>:</b>
	<?php echo CHtml::encode($data->wujud_mhs_pkm); ?>
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

</div>