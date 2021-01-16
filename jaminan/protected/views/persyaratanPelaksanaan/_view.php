<?php
/* @var $this PersyaratanPelaksanaanController */
/* @var $data PersyaratanPelaksanaan */
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
			<b><?php echo ($data->getAttributeLabel('p_mukin')); ?></b>
		</td>
		<td>
			: <?php echo ($data->p_mukin); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('p_toefl')); ?></b>
		</td>
		<td>
			: <?php echo ($data->p_toefl); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('kuliah_ujian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->kuliah_ujian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('ujian_kualifikasi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->ujian_kualifikasi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('penyaajian_penilaian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penyaajian_penilaian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('peraturan_penyajian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->peraturan_penyajian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('peraturan_publikasi')); ?></b>
		</td>
		<td>
			: <?php echo ($data->peraturan_publikasi); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('penilaian')); ?></b>
		</td>
		<td>
			: <?php echo ($data->penilaian); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo ($data->getAttributeLabel('tim_penguji')); ?></b>
		</td>
		<td>
			: <?php echo ($data->tim_penguji); ?>
		</td>
	</tr>

	</table>	

</div>