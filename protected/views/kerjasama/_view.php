<?php
/* @var $this KerjasamaController */
/* @var $data Kerjasama */
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
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_instansi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_instansi); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_mulai')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_mulai); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_akhir')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akhir); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_kegiatan); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kerjasama')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_kerjasama); ?>
		</td>
	</tr>

</table>
<!-- 
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kerjasama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kerjasama), array('view', 'id'=>$data->id_kerjasama)); ?>
	<br /> -->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('manfaat')); ?>:</b>
	<?php echo CHtml::encode($data->manfaat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kerjasama')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kerjasama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>