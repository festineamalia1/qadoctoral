<?php
/* @var $this UpayaKeberlanjutanController */
/* @var $data UpayaKeberlanjutan */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_upaya_keberlanjutan')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id_upaya_keberlanjutan), array('view', 'id'=>$data->id_upaya_keberlanjutan)); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
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
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('mutu_lulusan')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->mutu_lulusan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kerjasama_kemitraan')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->kerjasama_kemitraan); ?>
		</td>
	</tr>
</table>
	<?php /*
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('hibah_kompetitif')); ?>:</b>
</td>
	<?php echo CHtml::encode($data->hibah_kompetitif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	*/ ?>

</div>