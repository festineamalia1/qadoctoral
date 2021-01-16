<?php
/* @var $this MkKurikulumController */
/* @var $data MkKurikulum */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_mk), array('view', 'id'=>$data->kode_mk)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('semester')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->semester); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_mk')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_mk); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('bobot_sks')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->bobot_sks); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_sks')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_sks); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bobot_tgs')); ?>:</b>
	<?php echo CHtml::encode($data->bobot_tgs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelengkapan_deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->kelengkapan_deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelengkapan_silabus')); ?>:</b>
	<?php echo CHtml::encode($data->kelengkapan_silabus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelengkapan_SAP')); ?>:</b>
	<?php echo CHtml::encode($data->kelengkapan_SAP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penyelenggara')); ?>:</b>
	<?php echo CHtml::encode($data->penyelenggara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->ket_tambahan); ?>
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