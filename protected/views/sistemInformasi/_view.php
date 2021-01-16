<?php
/* @var $this SistemInformasiController */
/* @var $data SistemInformasi */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_si')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_si), array('view', 'id'=>$data->id_si)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('media')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->media); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kegunaan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kegunaan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('F_rencana_pengembangan_si')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->F_rencana_pengembangan_si); ?>
			<br />
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?></b>
		</td>
		<td>
			:<?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>