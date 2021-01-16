<?php
/* @var $this PustakaLainController */
/* @var $data PustakaLain */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pustaka')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pustaka), array('view', 'id'=>$data->id_pustaka)); ?>
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
			<b><?php echo CHtml::encode($data->getAttributeLabel('judul_pustaka')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->judul_pustaka); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('penerbit_sumber')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->penerbit_sumber); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('website_sumber')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->website_sumber); ?>
		</td>
	</tr>
	<tr>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?></b>
		</td>
		<td>
			: <?php echo CHtml::encode($data->sumber_data); ?>
		</td>
	</tr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>
</table>
</div>