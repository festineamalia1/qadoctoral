<?php
/* @var $this PrasaranaController */
/* @var $data Prasarana */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prasarana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prasarana), array('view', 'id'=>$data->id_prasarana)); ?>
	<br />-->
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('ruang_kerja')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ruang_kerja); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_ruang')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_ruang); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('luasm2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->luasm2); ?>
		</td>
	</tr>
	<tr>
		<td>		
			<b><?php echo CHtml::encode($data->getAttributeLabel('F_uraian_aspek')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->F_uraian_aspek); ?>
		</td>
	</tr>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('F_uraian_penilaian')); ?>:</b>
	<?php echo CHtml::encode($data->F_uraian_penilaian); ?>
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