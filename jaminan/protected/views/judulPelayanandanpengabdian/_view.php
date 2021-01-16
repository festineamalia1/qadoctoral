<?php
/* @var $this JudulPelayanandanpengabdianController */
/* @var $data JudulPelayanandanpengabdian */
?>

<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelayana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelayana), array('view', 'id'=>$data->id_pelayana)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_kegiatan_pengabdian')); ?>:</b>
	<?php echo CHtml::encode($data->judul_kegiatan_pengabdian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wkt_awl')); ?>:</b>
	<?php echo CHtml::encode($data->wkt_awl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wkt_akh')); ?>:</b>
	<?php echo CHtml::encode($data->wkt_akh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil')); ?>:</b>
	<?php echo CHtml::encode($data->hasil); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />
	</div>
	*/
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
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_dosen->nama_dosen); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_kegiatan_pengabdian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_kegiatan_pengabdian); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('wkt_awl')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->wkt_awl); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('wkt_akh')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->wkt_akh); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('hasil')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->hasil); ?>
		</td>
	</tr>

	</table>
</div>
