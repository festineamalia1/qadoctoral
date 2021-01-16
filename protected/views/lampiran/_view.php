<?php
/* @var $this LampiranController */
/* @var $data Lampiran */
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
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_file')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_file); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->keterangan); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('standar')); ?></b>
		</td>
		<td>
			: <?php echo "Standar ". CHtml::encode($data->standar); ?>
		</td>
	</tr>
</table>

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('lampiran_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->lampiran_id), array('view', 'id'=>$data->lampiran_id)); ?>
	<br /> -->


</div>