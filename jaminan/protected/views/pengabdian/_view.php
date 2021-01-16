<?php
/* @var $this PengabdianController */
/* @var $data pengabdian */
?>

	<?php /*

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengabdian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengabdian), array('view', 'id'=>$data->id_pengabdian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_biaya')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_biaya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts1')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_ts1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts2')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_ts2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mhsiswa_terlibat_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->mhsiswa_terlibat_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_pengabdian')); ?>:</b>
	<?php echo CHtml::encode($data->judul_pengabdian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_sumber_biaya')); ?>:</b>
	<?php echo CHtml::encode($data->detail_sumber_biaya); ?>
	<br />

	</div>
	*/ ?>


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
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_biaya')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_biaya); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_pengabdian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_pengabdian); ?>
		</td>
	</tr>

	
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_ts); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts1')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_ts1); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_ts2); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts3')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_ts3); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_ts4')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu_ts4); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('mhsiswa_terlibat_kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->mhsiswa_terlibat_kegiatan); ?>
		</td>
	</tr>
	
	</table>
</div>