<?php
/* @var $this DataMhs7thController */
/* @var $data DataMhs7th */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mhs7')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mhs7), array('view', 'id'=>$data->id_mhs7)); ?>
	<br /> -->
	<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:52%;">
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('TS_jum')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->TS_jum); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('value_jumlah')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->value_jumlah); ?>
		</td>
	</tr>


	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jum_lulusan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jum_lulusan); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>