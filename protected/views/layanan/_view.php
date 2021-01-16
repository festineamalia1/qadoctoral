<?php
/* @var $this LayananController */
/* @var $data Layanan */
?>

<div class="view">
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_layanan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_layanan), array('view', 'id'=>$data->id_layanan)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_BK')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->kegiatan_BK); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan_BK')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->pelaksanaan_BK); ?>
		</td>
	</tr>			
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_BK')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->hasil_BK); ?>
		</td>
	</tr>			
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_minat')); ?></b>
		</td>
		<td>			
			: <?php echo CHtml::encode($data->kegiatan_minat); ?>
		</td>
	</tr>			

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan_minat')); ?>:</b>
	<?php echo CHtml::encode($data->pelaksanaan_minat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_minat')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_minat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_softskill')); ?>:</b>
	<?php echo CHtml::encode($data->kegiatan_softskill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan_softskill')); ?>:</b>
	<?php echo CHtml::encode($data->pelaksanaan_softskill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_softskill')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_softskill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_beasiswa')); ?>:</b>
	<?php echo CHtml::encode($data->kegiatan_beasiswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan_beasiswa')); ?>:</b>
	<?php echo CHtml::encode($data->pelaksanaan_beasiswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_beasiswa')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_beasiswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kegiatan_kesehatan')); ?>:</b>
	<?php echo CHtml::encode($data->kegiatan_kesehatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pelaksanaan_kesehatan')); ?>:</b>
	<?php echo CHtml::encode($data->pelaksanaan_kesehatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_kesehatan')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_kesehatan); ?>
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