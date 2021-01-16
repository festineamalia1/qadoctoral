<?php
/* @var $this Monitoring2Controller */
/* @var $data Monitoring2 */
?>

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
		<td>
		<b><?php echo ($data->getAttributeLabel('pelaksanaan_ujian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->pelaksanaan_ujian); ?>
		</td>
	</tr>

	<td>
			<b><?php echo ($data->getAttributeLabel('usul_penelitian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->usul_penelitian); ?>
		</td>
	</tr>

	<td>
			<b><?php echo ($data->getAttributeLabel('penulisan_disertasi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penulisan_disertasi); ?>
		</td>
	</tr>

	<td>
			<b><?php echo ($data->getAttributeLabel('kelayakan_dosen')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kelayakan_dosen); ?>
		</td>
	</tr>

	<td>
			<b><?php echo ($data->getAttributeLabel('ujian_akhir')); ?></b>
		</td>
		<td>
			: <?php echo ($data->ujian_akhir); ?>
		</td>
	</tr>
	</table>	
	

</div>