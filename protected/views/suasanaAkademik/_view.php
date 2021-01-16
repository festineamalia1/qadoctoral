<?php
/* @var $this SuasanaAkademikController */
/* @var $data SuasanaAkademik */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_suasana')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_suasana), array('view', 'id'=>$data->id_suasana)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('kebijakan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kebijakan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sarana_dana')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sarana_dana); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kegiatan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('interaksi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->interaksi); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pengembangan_perilaku')); ?>:</b>
	<?php echo CHtml::encode($data->pengembangan_perilaku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket_lainnya')); ?>:</b>
	<?php echo CHtml::encode($data->ket_lainnya); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('F_pembelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->F_pembelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('F_suasana_akademik')); ?>:</b>
	<?php echo CHtml::encode($data->F_suasana_akademik); ?>
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