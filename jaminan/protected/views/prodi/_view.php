<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prodi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prodi), array('view', 'id'=>$data->id_prodi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>:</b>
	<?php echo CHtml::encode($data->id_administrasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_prodi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_prodi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_sk')); ?>:</b>
	<?php echo CHtml::encode($data->no_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_sk')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pejabat_sk')); ?>:</b>
	<?php echo CHtml::encode($data->pejabat_sk); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('bln_thn_PS')); ?>:</b>
	<?php echo CHtml::encode($data->bln_thn_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_sk_operasional')); ?>:</b>
	<?php echo CHtml::encode($data->no_sk_operasional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_sk_operasional')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_sk_operasional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai_akreditasi_akhir')); ?>:</b>
	<?php echo CHtml::encode($data->nilai_akreditasi_akhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_sk_BANPT')); ?>:</b>
	<?php echo CHtml::encode($data->no_sk_BANPT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_PS')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp_PS')); ?>:</b>
	<?php echo CHtml::encode($data->telp_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax_PS')); ?>:</b>
	<?php echo CHtml::encode($data->fax_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homepage_PS')); ?>:</b>
	<?php echo CHtml::encode($data->homepage_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_PS')); ?>:</b>
	<?php echo CHtml::encode($data->email_PS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sumber_data')); ?>:</b>
	<?php echo CHtml::encode($data->sumber_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />

	*/ ?>

</div>