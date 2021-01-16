<?php
/* @var $this KegiatanTenagaAhliLuarptController */
/* @var $data KegiatanTenagaAhliLuarpt */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kegiatan_luarPT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kegiatan_luarPT), array('view', 'id'=>$data->id_kegiatan_luarPT)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pakar')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_pakar); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_kegiatan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_kegiatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_kegiatan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('waktu')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->waktu); ?>
		</td>
	</tr>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>