<?php
/* @var $this HimpunanAlumniS2Controller */
/* @var $data HimpunanAlumniS2 */
?>

<div class="view">

	<table>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_himpunans3')); ?></b>
			</td>
			<td>
				: <?php echo CHtml::link(CHtml::encode($data->id_himpunans3), array('view', 'id'=>$data->id_himpunans3)); ?>
			</td>
		</tr>
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

</div>