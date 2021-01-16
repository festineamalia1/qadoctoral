<?php
/* @var $this JmlMahasiswaS2Controller */
/* @var $data JmlMahasiswaS2 */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_jml_mhs_s2')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jml_mhs_s2), array('view', 'id'=>$data->id_jml_mhs_s2)); ?>
	<br /> -->
	<table class="table-hover" style="border:100%;"> 
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->relasi_prodi->nama_prodi); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->relasi_administrasi->th_akademik); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_akademik')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->tahun_akademik); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('daya_tampung')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->daya_tampung); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_ikut_seleksi')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_ikut_seleksi); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lolos_seleksi')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_lolos_seleksi); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_maba')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_maba); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_maba_transfer')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_maba_transfer); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_total')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_total); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lulusan')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_lulusan); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lulusan_transfer')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->jml_lulusan_transfer); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_min')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->ipk_min); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_max')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->ipk_max); ?>
			</td>
		</tr>
		<tr>
			<td style="width:40%;">
				<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_rata')); ?>:</b>
			</td>
			<td>
				: <?php echo CHtml::encode($data->ipk_rata); ?>
			</td>
		</tr>
			<tr>
			<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('jml_mhs_wna')); ?>:</b>
			</td>
			<td>
			: <?php echo CHtml::encode($data->jml_mhs_wna); ?>
			</td>
		</tr>
		</tr>
			<tr>
			<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('rata_lama_studi')); ?>:</b>
			</td>
			<td>
			: <?php echo CHtml::encode($data->rata_lama_studi); ?>
			</td>
		</tr>
	</table>
	
	
	<!-- <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_ikut_seleksi')); ?>:</b>
	<?php echo CHtml::encode($data->jml_ikut_seleksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lolos_seleksi')); ?>:</b>
	<?php echo CHtml::encode($data->jml_lolos_seleksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_maba')); ?>:</b>
	<?php echo CHtml::encode($data->jml_maba); ?>
	<br /> -->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_maba_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jml_maba_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_total')); ?>:</b>
	<?php echo CHtml::encode($data->jml_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_total_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jml_total_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lulusan')); ?>:</b>
	<?php echo CHtml::encode($data->jml_lulusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_lulusan_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jml_lulusan_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_min')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_min); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_max')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_max); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_rata')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_rata); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jml_mhs_wna')); ?>:</b>
	<?php echo CHtml::encode($data->jml_mhs_wna); ?>
	<br />

	*/ ?>

</div>