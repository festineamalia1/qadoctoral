<div class="view">
<table class=" table-hover" style="width:100%;">
	<!--
	<tr>
		<td style="width:25%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_mhs_reguler')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::link(CHtml::encode($data->id_mhs_reguler), array('view', 'id'=>$data->id_mhs_reguler)); ?>
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
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('thn_akademik')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->thn_akademik); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('daya_tampung')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->daya_tampung); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('mhs_ikut_seleksi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->mhs_ikut_seleksi); ?>
		</td>
	</tr>

	<tr>
		<td style="width:20%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('mhs_lulus_seleksi')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->mhs_lulus_seleksi); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('maba_bkn_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->maba_bkn_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maba_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->maba_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_mhs_bkn_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->total_mhs_bkn_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_mhs_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->total_mhs_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_lulus_bkn_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_lulus_bkn_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_lulus_transfer')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_lulus_transfer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_min_lulusan_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_min_lulusan_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_rata2_lulusan_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_rata2_lulusan_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipk_maks_lulusan_reguler')); ?>:</b>
	<?php echo CHtml::encode($data->ipk_maks_lulusan_reguler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persen_ipk275')); ?>:</b>
	<?php echo CHtml::encode($data->persen_ipk275); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persen_ipk275_350')); ?>:</b>
	<?php echo CHtml::encode($data->persen_ipk275_350); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('persen_ipk350')); ?>:</b>
	<?php echo CHtml::encode($data->persen_ipk350); ?>
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