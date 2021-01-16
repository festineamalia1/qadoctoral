<?php
/* @var $this JurnalController */
/* @var $data Jurnal */
?>

<div class="view">
<!--
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_jurnal')); ?></b>
			<?php echo CHtml::link(CHtml::encode($data->id_jurnal), array('view', 'id'=>$data->id_jurnal)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jurnal')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_jurnal); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_no_terbit')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_no_terbit); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jumlah); ?>
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