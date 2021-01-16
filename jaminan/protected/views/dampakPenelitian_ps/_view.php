<?php
/* @var $this DampakPenelitian_psController */
/* @var $data DampakPenelitian_ps */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_dampakpenelitian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dampakpenelitian), array('view', 'id'=>$data->id_dampakpenelitian)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_penelitian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_penelitian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_penelitian')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_penelitian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('damp_produktifitas')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->damp_produktifitas); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('damp_mutu_lingkungan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->damp_mutu_lingkungan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('damp_kesejahteraan_masyarakat')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->damp_kesejahteraan_masyarakat); ?>
		</td>
	</tr>
	</table>
</div>