<?php
/* @var $this PelaksanaanBimbinganTaController */
/* @var $data PelaksanaanBimbinganTa */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelaksanaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelaksanaan), array('view', 'id'=>$data->id_pelaksanaan)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('ketersediaan_panduan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ketersediaan_panduan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kebijakan_pembimbingan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kebijakan_pembimbingan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('penunjukan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->penunjukan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('proses_pembimbingan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->proses_pembimbingan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('rata_penyelesaian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->rata_penyelesaian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('rencana_semester')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->rencana_semester); ?>
		</td>
	</tr>
	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>