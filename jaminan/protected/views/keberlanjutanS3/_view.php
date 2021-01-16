<?php
/* @var $this UpayaKeberlanjutanController */
/* @var $data UpayaKeberlanjutan */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_keberlanjutan_s3')); ?></b>
		</td>
		<td>
			:<?php echo CHtml::link(CHtml::encode($data->id_keberlanjutan_s3), array('view', 'id'=>$data->id_keberlanjutan_s3)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('animo_calon_mhs')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->animo_calon_mhs); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('mutu_manajemen')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->mutu_manajemen); ?>
		</td>
	</tr>
</table>
</div>