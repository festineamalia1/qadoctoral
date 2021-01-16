<?php
/* @var $this DanaPelayananController */
/* @var $data DanaPelayanan */
?>

<div class="view">

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dana_pelayanan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dana_pelayanan), array('view', 'id'=>$data->id_dana_pelayanan)); ?>
	<br />-->


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
			<b><?php echo CHtml::encode($data->getAttributeLabel('Jdl_kegiatan_pelayanan')); ?>:</b>
		</td>
		<td>
			: <?php echo ($data->Jdl_kegiatan_pelayanan); ?>
		</td>
	</tr>
	

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?>:</b>
		</td>
		<td>
			: <?php echo ($data->sumber_dana); ?>
		</td>
	</tr>


	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_dana')); ?>:</b>
		</td>
		<td>
			: <?php echo ($data->jenis_dana); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_dana')); ?>:</b>
		</td>
		<td>
			: <?php echo ($data->jml_dana); ?>
		</td>
	</tr>

	
</table>







<?php
/*
	

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_dana')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_dana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_dana')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_dana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_dana')); ?>:</b>
	<?php echo CHtml::encode($data->jml_dana); ?>
	<br />
	*/
?>
</div>