<?php
/* @var $this AktivitasDosenTetapSemesterController */
/* @var $data AktivitasDosenTetapSemester */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aktivitas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_aktivitas), array('view', 'id'=>$data->id_aktivitas)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen_tetap')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_dosen_tetap); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sks_PSsendiri')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sks_PSsendiri); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sks_PSlain_PTsendiri')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sks_PSlain_PTsendiri); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sks_PSPTlain')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sks_PSPTlain); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sks_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->sks_penelitian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks_pkm')); ?>:</b>
	<?php echo CHtml::encode($data->sks_pkm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks_manajemen_PTsendiri')); ?>:</b>
	<?php echo CHtml::encode($data->sks_manajemen_PTsendiri); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sks_manajemen_PTlain')); ?>:</b>
	<?php echo CHtml::encode($data->sks_manajemen_PTlain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_sks')); ?>:</b>
	<?php echo CHtml::encode($data->jum_sks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>