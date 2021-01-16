<?php
/* @var $this UmpanBalikController */
/* @var $data UmpanBalik */
?>

<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:30%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_umpan_balik')); ?>:</b>
		</td>
		<td>
			<?php echo CHtml::link(CHtml::encode($data->id_umpan_balik), array('view', 'id'=>$data->id_umpan_balik)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('umpan_balik_dosen')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->umpan_balik_dosen); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut_dosen')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->tindak_lanjut_dosen); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('umpan_balik_mhs')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->umpan_balik_mhs); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut_mhs')); ?>:</b>
		</td>
		<td>
			<?php echo ($data->tindak_lanjut_mhs); ?>
		</td>
	</tr>
</table>
	<?php /*
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('umpan_balik_alumni')); ?>:</b>
</td>
	<?php echo CHtml::encode($data->umpan_balik_alumni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut_alumni')); ?>:</b>
	<?php echo CHtml::encode($data->tindak_lanjut_alumni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('umpan_balik_lulusan')); ?>:</b>
	<?php echo CHtml::encode($data->umpan_balik_lulusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut_lulusan')); ?>:</b>
	<?php echo CHtml::encode($data->tindak_lanjut_lulusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	*/ ?>

</div>