<?php
/* @var $this DataMhs6thnController */
/* @var $data DataMhs6thn */
?>

<div class="view">
	<table>
	<tr>
		<td style="width:52%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_mhs6thn')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::link(CHtml::encode($data->id_mhs6thn), array('view', 'id'=>$data->id_mhs6thn)); ?>
		</td>
	</tr>
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
	</table>

</div>