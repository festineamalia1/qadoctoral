<?php
/* @var $this DanaOperasionalController */
/* @var $data DanaOperasional */
?>

<div class="view">

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dana_operasional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dana_operasional), array('view', 'id'=>$data->id_dana_operasional)); ?>
	<br />-->

	<table class=" table-hover" style="width:100%;">
	<tr>
		<td>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('TS2')); ?></b>
		</td>
		<td>
			 : <?php echo CHtml::encode($data->TS2); ?><?php echo CHtml::encode($data->TS2); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('TS1')); ?></b>
		</td>
		<td>
			 : <?php echo CHtml::encode($data->TS1); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('TS')); ?></b>
		</td>
		<td>
			 : <?php echo CHtml::encode($data->TS); ?>
		</td>
	</tr>

	
	</table>

<?
/*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dana_operasional')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dana_operasional), array('view', 'id'=>$data->id_dana_operasional)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TS2')); ?>:</b>
	<?php echo CHtml::encode($data->TS2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TS1')); ?>:</b>
	<?php echo CHtml::encode($data->TS1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TS')); ?>:</b>
	<?php echo CHtml::encode($data->TS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />
*/
?>

</div>