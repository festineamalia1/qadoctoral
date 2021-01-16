<?php
/* @var $this HimpunanAlumniS2Controller */
/* @var $data HimpunanAlumniS2 */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_himpunans2')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_himpunans2), array('view', 'id'=>$data->id_himpunans2)); ?>
	<br /> -->
	<table>
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
				<b><?php echo CHtml::encode($data->getAttributeLabel('himpunan_alumni')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->himpunan_alumni); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('sumbangan_dana')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->sumbangan_dana); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('sumbangan_fasilitas')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->sumbangan_fasilitas); ?>
			</td>
		</tr>
		<tr>
			<td>
				<b><?php echo CHtml::encode($data->getAttributeLabel('masukan_perbaikan_pembelajaran')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->masukan_perbaikan_pembelajaran); ?>
			</td>
		</tr>
	</table>

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('himpunan_alumni')); ?>:</b>
	<?php echo CHtml::encode($data->himpunan_alumni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbangan_dana')); ?>:</b>
	<?php echo CHtml::encode($data->sumbangan_dana); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumbangan_fasilitas')); ?>:</b>
	<?php echo CHtml::encode($data->sumbangan_fasilitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masukan_perbaikan_pembelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->masukan_perbaikan_pembelajaran); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pengembangan_jejaring')); ?>:</b>
	<?php echo CHtml::encode($data->pengembangan_jejaring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?> -->

</div>