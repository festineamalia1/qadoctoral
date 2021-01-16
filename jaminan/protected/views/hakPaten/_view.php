<?php
/* @var $this HakPatenController */
/* @var $data HakPaten */
?>

<div class="view">

	<table class="table-hover" style="width:100%;">
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_karya')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->relasi_karya->judul); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('haki')); ?></b>
			</td>
			<td>
				: <?php echo ($data->haki); ?>
			</td>
		</tr>	
	</table>
</div>