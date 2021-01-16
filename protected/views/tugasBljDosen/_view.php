<?php
/* @var $this TugasBljDosenController */
/* @var $data TugasBljDosen */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kemampuan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kemampuan), array('view', 'id'=>$data->id_kemampuan)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_dosen); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('pendidikan_lanjut')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->pendidikan_lanjut); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('bidang_studi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->bidang_studi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('PT')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->PT); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('negara')); ?>:</b>
	<?php echo CHtml::encode($data->negara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('th_mulai_studi')); ?>:</b>
	<?php echo CHtml::encode($data->th_mulai_studi); ?>
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