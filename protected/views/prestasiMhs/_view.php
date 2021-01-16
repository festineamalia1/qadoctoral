<?php
/* @var $this PrestasiMhsController */
/* @var $data PrestasiMhs */
?>

<div class="view">
	
		<!--
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prestasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::link(CHtml::encode($data->id_prestasi), array('view', 'id'=>$data->id_prestasi)); ?>
		</td>
	<tr> -->
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
	<tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_kegiatan); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('wkt_penyelenggaraan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->wkt_penyelenggaraan); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tingkat')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tingkat); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('prestasi_dicapai')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->prestasi_dicapai); ?>\
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>