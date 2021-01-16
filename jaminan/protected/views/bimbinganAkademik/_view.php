<?php
/* @var $this BimbinganAkademikController */
/* @var $data BimbinganAkademik */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bimbingan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bimbingan), array('view', 'id'=>$data->id_bimbingan)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_dosen->nama_dosen); ?>
		</td>
	</tr>
	
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jabatan_dosen); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_promotor')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_promotor); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_kopromotor')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_kopromotor); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_anggota')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_anggota); ?>
		</td>
	</tr>

	<!--<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('rata_penyelesaian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->rata_penyelesaian); ?>
		</td>
	</tr>-->


	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>