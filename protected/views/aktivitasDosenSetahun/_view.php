<?php
/* @var $this AktivitasDosenSetahunController */
/* @var $data AktivitasDosenSetahun */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aktivitas_setahun')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_aktivitas_setahun), array('view', 'id'=>$data->id_aktivitas_setahun)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_dosen); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('bidang_keahlian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->bidang_keahlian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mk')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kode_mk); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_mk')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_mk); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->jum_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_rencana_pertemuan')); ?>:</b>
	<?php echo CHtml::encode($data->jum_rencana_pertemuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_pertemuan_terlaksana')); ?>:</b>
	<?php echo CHtml::encode($data->jum_pertemuan_terlaksana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->status_dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->status_bidang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>