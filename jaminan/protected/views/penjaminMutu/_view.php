<?php
/* @var $this PenjaminMutuController */
/* @var $data PenjaminMutu */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_penjamin_mutu')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id_penjamin_mutu), array('view', 'id'=>$data->id_penjamin_mutu)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('penjamin_mutu')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->penjamin_mutu); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

</table>

</div>