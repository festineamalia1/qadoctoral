<div class="view">
<table class=" table-hover" style="width:100%;">
	<!-- <tr>
		<td style="width:20%;">
			<b><?//php echo CHtml::encode($data->getAttributeLabel('id_visi_misi')); ?></b>
		</td>
		<td>
			: <?//php echo CHtml::link(CHtml::encode($data->id_visi_misi), array('view', 'id'=>$data->id_visi_misi)); ?>
		</td>
	</tr> -->

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
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('mekanisme')); ?></b>
		</td>
		<td>
			: <?php echo ($data->mekanisme); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('visi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->visi); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('misi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->misi); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->tujuan); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sasaran')); ?></b>
		</td>
		<td>
			: <?php echo ($data->sasaran); ?>
		</td>
	</tr>

	
</table>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('strategi')); ?>:</b>
	<?php echo CHtml::encode($data->strategi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sosialisasi')); ?>:</b>
	<?php echo CHtml::encode($data->sosialisasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>