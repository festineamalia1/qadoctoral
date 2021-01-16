<?php
/* @var $this KurikulumTidakTetapController */
/* @var $data KurikulumTidakTetap */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tdk_tetap')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tdk_tetap), array('view', 'id'=>$data->id_tdk_tetap)); ?>
	<br />-->

<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:40%;">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	</td>
		<td>
	:<?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
		</td>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	</td>
		<td>
	:<?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
	</td>
	</tr>
	<tr>
		<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('penataan_pelaksanaan')); ?>:</b>
	</td>
		<td>
	:<?php echo CHtml::encode($data->penataan_pelaksanaan); ?>
	</td>
	</tr>
	<tr>
		<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('peninjauan_kurikulum')); ?>:</b>
	</td>
		<td>
	:<?php echo CHtml::encode($data->peninjauan_kurikulum); ?>
	</td>
	</tr>
	<tr>
		<td>

		</table>
</div>