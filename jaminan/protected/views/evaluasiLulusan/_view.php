<?php
/* @var $this EvaluasiLulusanController */
/* @var $data EvaluasiLulusan */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evaluasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_evaluasi), array('view', 'id'=>$data->id_evaluasi)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('studi_pelacakan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->studi_pelacakan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('metode')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->metode); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('proses')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->proses); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mekanisme_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->mekanisme_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut')); ?>:</b>
	<?php echo CHtml::encode($data->tindak_lanjut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil')); ?>:</b>
	<?php echo CHtml::encode($data->hasil); ?>
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