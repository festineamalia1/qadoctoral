<?php
/* @var $this PengisiBorangController */
/* @var $data PengisiBorang */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</td>
	</tr>
	
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
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama); ?>
		</td>
	</tr>

	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nidn')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nidn); ?>
		</td>
	</tr>

	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jabatan); ?>
		</td>
	</tr>

	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_pengisian')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode(date('d M Y',strtotime($data->tanggal_pengisian))); ?>
		</td>
	</tr>

</table>
</div>