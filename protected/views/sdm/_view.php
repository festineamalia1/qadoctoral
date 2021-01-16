<?php
/* @var $this SdmController */
/* @var $data Sdm */
?>

<div class="view">

	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sdm')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sdm), array('view', 'id'=>$data->id_sdm)); ?>
	<br /> -->

<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?></b>
		</td>

	<?
	if(Yii::app()->user->group_id == 1){
		?>
		<td>
			: <?php echo CHtml::listData(Prodi::model()->findAllByAttributes(array('id_prodi'=>Yii::app()->user->group_id)), 'id_prodi', 'nama_prodi'); ?>
		</td>
		<?
		} else { ?>
		<td>
			: <?php echo CHtml::listData(Prodi::model()->findAll(), 'id_prodi', 'nama_prodi'); ?>
			
		<?
	}
	?>
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
			<b><?php echo ($data->getAttributeLabel('rekrut_seleksi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->rekrut_seleksi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('penempatan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penempatan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('pengembangan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->pengembangan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('retensi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->retensi); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('berhenti_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->berhenti_dosen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berhenti_kependidikan')); ?>:</b>
	<?php echo CHtml::encode($data->berhenti_kependidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monitoring')); ?>:</b>
	<?php echo CHtml::encode($data->monitoring); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('evaluasi')); ?>:</b>
	<?php echo CHtml::encode($data->evaluasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rekam_jejak')); ?>:</b>
	<?php echo CHtml::encode($data->rekam_jejak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ket_tambahan')); ?>:</b>
	<?php echo CHtml::encode($data->ket_tambahan); ?>
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