<?php
/* @var $this MahasiswaS3Controller */
/* @var $data MahasiswaS3 */
?>

<div class="view">

<table>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('id_mhs_s3')); ?></b></td>
		<td>: <?php echo CHtml::link(CHtml::encode($data->id_mhs_s3), array('view', 'id'=>$data->id_mhs_s3)); ?></td>
	</tr>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('NIF')); ?></b></td>
		<td>: <?php echo CHtml::encode($data->NIF); ?></td>
	</tr>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('nama_mhs_s3')); ?></b></td>
		<td>: <?php echo CHtml::encode($data->nama_mhs_s3); ?></td>
	</tr>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('alamat_mhs')); ?></b></td>
		<td>: <?php echo CHtml::encode($data->alamat_mhs); ?></td>
	</tr>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?></b></td>
		<td>: <?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?></td>
	</tr>
	<tr>
		<td><b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b></td>
		<td>: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?></td>
	</tr>
</table>
</div>