<?php
/* @var $this TesisMhs_ps_S2Controller */
/* @var $data TesisMhs_ps_S2 */
?>
<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tesis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tesis), array('view', 'id'=>$data->id_tesis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_tesis')); ?>:</b>
	<?php echo CHtml::encode($data->judul_tesis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_mhs_s2')); ?>:</b>
	<?php echo CHtml::encode($data->nama_mhs_s2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dosen); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />
	</div>
	

	*/ ?>



<div class="view">
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
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ts); ?>
		</td>
	</tr>
	
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_mhs_s2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_mhs_s2); ?>
		</td>
	</tr>
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_tesis')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_tesis); ?>
		</td>
	</tr>
	
	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_dosen); ?>
		</td>
	</tr>
	
	</table>
</div>