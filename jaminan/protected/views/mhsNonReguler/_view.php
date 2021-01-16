<?php
/* @var $this MhsNonRegulerController */
/* @var $data MhsNonReguler */
?>

<div class="view">
	<table class=" table-hover" style="width:100%;">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mhs_nonreg')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mhs_nonreg), array('view', 'id'=>$data->id_mhs_nonreg)); ?>
	<br /> -->
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
		</tr>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('th_akademik')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akademik); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('daya_tampung')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->daya_tampung); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_ikut_seleksi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_ikut_seleksi); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lulus_seleksi')); ?></b>
		</TD>
		<td>
			: <?php echo CHtml::encode($data->jml_lulus_seleksi); ?>
		</td>
	</TR>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_maba_nonreg')); ?>:</b>
	<?php echo CHtml::encode($data->jml_maba_nonreg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jml_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tot_mhs_nonreg')); ?>:</b>
	<?php echo CHtml::encode($data->tot_mhs_nonreg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tot_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->tot_transfer); ?>
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