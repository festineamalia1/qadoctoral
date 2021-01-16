<?php
/* @var $this SuasanaAkademikController */
/* @var $data SuasanaAkademik */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_suasana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_suasana), array('view', 'id'=>$data->id_suasana)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('suasana_akademik')); ?></b>
		</td>
		<td>
			: <?php echo ($data->suasana_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('ketersediaan_kelengkapan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->ketersediaan_kelengkapan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('interaksi_akademik')); ?></b>
		</td>
		<td>
			: <?php echo ($data->interaksi_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('upaya_ps')); ?></b>
		</td>
		<td>
			: <?php echo ($data->upaya_ps); ?>
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