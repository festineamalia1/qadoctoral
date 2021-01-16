<?php
/* @var $this KurikulumController */
/* @var $data Kurikulum */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kurikulum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kurikulum), array('view', 'id'=>$data->id_kurikulum)); ?>
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
	<!--
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_mk_kurikulum')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->id_mk_kurikulum); ?>
		</td>
	</tr> -->
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kompetensi_utama')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kompetensi_utama); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kompetensi_pendukung')); ?></b>
		</td>
		<td>
			<?php echo ($data->kompetensi_pendukung); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kompetensi_lain')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kompetensi_lain); ?>
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