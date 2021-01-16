<?php
/* @var $this DetailEvaluasiLulusanController */
/* @var $data DetailEvaluasiLulusan */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_detail')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_detail), array('view', 'id'=>$data->id_detail)); ?>
	<br /> -->
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:32%;">		
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kemampuan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_kemampuan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tanggap_sangat_baik')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tanggap_sangat_baik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tanggap_baik')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tanggap_baik); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tanggap_cukup')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tanggap_cukup); ?>
		</td>
	</tr>

	<tr>
		<td>			
			<b><?php echo CHtml::encode($data->getAttributeLabel('tanggap_kurang')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tanggap_kurang); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('rencana_tindak_lanjut')); ?>:</b>
	<?php echo CHtml::encode($data->rencana_tindak_lanjut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ketarangan')); ?>:</b>
	<?php echo CHtml::encode($data->ketarangan); ?>
	<br />

	*/ ?>
</table>
</div>