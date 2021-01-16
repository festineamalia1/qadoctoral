<?php
/* @var $this PeralatanUtamaController */
/* @var $data PeralatanUtama */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_peralatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_peralatan), array('view', 'id'=>$data->id_peralatan)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lab')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->nama_lab); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_peralatan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jenis_peralatan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_unit')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->jml_unit); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kepemilikan')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kepemilikan); ?>
		</td>
	</tr>
	<!--
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kondisi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('rata2_wkt_guna')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->rata2_wkt_guna); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
			<?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->lampiran); ?>
		</td>
	</tr>
	-->
	
</table>
</div>