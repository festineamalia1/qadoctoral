<?php
/* @var $this PenelitianController */
/* @var $data penelitian */
?>
<?php /*
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penelitian_dosentetap_ps_s3')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_penelitian_dosentetap_ps_s3), array('view', 'id'=>$data->id_penelitian_dosentetap_ps_s3)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->id_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_penelitian_awal')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_penelitian_awal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_penelitian_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_penelitian_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->status_penelitian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->judul_penelitian); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_penelitian')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_penelitian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />
	<tr>
		<td style="width:40%;">
			<b><?php echo CHtml::encode($data->getAttributeLabel('id_dosen')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->relasi_dosen->nama_dosen); ?>
		</td>
	</tr>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->id_sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ts0')); ?>:</b>
	<?php echo CHtml::encode($data->Ts0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ts1')); ?>:</b>
	<?php echo CHtml::encode($data->Ts1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ts2')); ?>:</b>
	<?php echo CHtml::encode($data->Ts2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya')); ?>:</b>
	<?php echo CHtml::encode($data->biaya); ?>
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
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->ts); ?>
		</td>
	</tr>

	
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('biaya')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->biaya); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Ts0')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->Ts0); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Ts1')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->Ts1); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Ts2')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->Ts2); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Ts3')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->Ts3); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Ts4')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->Ts4); ?>
		</td>
	</tr>
<!-- 
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_penelitian_awal')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tgl_penelitian_awal); ?>
		</td>
	</tr>

	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_penelitian_akhir')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->tgl_penelitian_akhir); ?>
		</td>
	</tr> -->

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
			<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->lampiran); ?>
		</td>
	</tr>
</table>
</div>
