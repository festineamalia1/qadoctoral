<?php
/* @var $this TopikPenelitianController */
/* @var $data TopikPenelitian */
?>
<?php
/*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_topik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_topik), array('view', 'id'=>$data->id_topik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topik_penelitian_disertasi')); ?>:</b>
	<?php echo CHtml::encode($data->topik_penelitian_disertasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jum_mhs_terlbt')); ?>:</b>
	<?php echo CHtml::encode($data->jum_mhs_terlbt); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->judul_penelitian); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('mhs_terlibat_disertasi')); ?>:</b>
	<?php echo CHtml::encode($data->mhs_terlibat_disertasi); ?>
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
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
		</td>
	</tr>
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_dosen->nama_dosen); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('topik_penelitian_disertasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->topik_penelitian_disertasi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jum_mhs_terlbt')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jum_mhs_terlbt); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('mhs_terlibat_disertasi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->mhs_terlibat_disertasi); ?>
		</td>
	</tr>

	</table>
</div>