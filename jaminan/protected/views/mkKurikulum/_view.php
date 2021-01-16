<?php
/* @var $this MkKurikulumController */
/* @var $data MkKurikulum */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_mk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_mk), array('view', 'id'=>$data->kode_mk)); ?>
	<br /> 

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
			<b><?php echo ($data->getAttributeLabel('semester')); ?></b>
		</td>
		<td>
			: <?php echo ($data->semester); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('nama_mk')); ?></b>
		</td>
		<td>
			: <?php echo ($data->nama_mk); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('bobot_sks')); ?></b>
		</td>
		<td>
			: <?php echo ($data->bobot_sks); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('jenis_sks')); ?></b>
		</td>
		<td>
			: <?php echo ($data->jenis_sks); ?>
		</td>
	</tr>
	
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('kelengkapan_deskripsi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kelengkapan_deskripsi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('kelengkapan_silabus')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kelengkapan_silabus); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('kelengkapan_SAP')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kelengkapan_SAP); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('penyelenggara')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penyelenggara); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('perkuliahan')); ?></b>
		</td>
		<td>
			: <?php echo ($data->perkuliahan); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('tugas_khusus')); ?></b>
		</td>
		<td>
			: <?php echo ($data->tugas_khusus); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('penelitian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penelitian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('hasil_penelitian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->hasil_penelitian); ?>
		</td>
	</tr>
</table>
</div>