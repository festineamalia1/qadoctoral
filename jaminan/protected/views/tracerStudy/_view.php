<?php
/* @var $this TracerStudyController */
/* @var $data TracerStudy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tracer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tracer), array('view', 'id'=>$data->id_tracer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kemampuan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kemampuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sangat_baik')); ?>:</b>
	<?php echo CHtml::encode($data->sangat_baik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baik')); ?>:</b>
	<?php echo CHtml::encode($data->baik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cukup')); ?>:</b>
	<?php echo CHtml::encode($data->cukup); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kurang')); ?>:</b>
	<?php echo CHtml::encode($data->kurang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tindak_lanjut')); ?>:</b>
	<?php echo CHtml::encode($data->tindak_lanjut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rata2_wkt_tunggu')); ?>:</b>
	<?php echo CHtml::encode($data->rata2_wkt_tunggu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persen_kerja_bidang')); ?>:</b>
	<?php echo CHtml::encode($data->persen_kerja_bidang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>