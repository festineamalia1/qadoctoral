<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prodi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
		<?php echo $form->error($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_prodi'); ?>
		<?php echo $form->textField($model,'nama_prodi',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_sk'); ?>
		<?php echo $form->textField($model,'no_sk',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_sk'); ?>
		<?php echo $form->textField($model,'tgl_sk'); ?>
		<?php echo $form->error($model,'tgl_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pejabat_sk'); ?>
		<?php echo $form->textField($model,'pejabat_sk',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pejabat_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bln_thn_PS'); ?>
		<?php echo $form->textField($model,'bln_thn_PS'); ?>
		<?php echo $form->error($model,'bln_thn_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_sk_operasional'); ?>
		<?php echo $form->textField($model,'no_sk_operasional',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_sk_operasional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_sk_operasional'); ?>
		<?php echo $form->textField($model,'tgl_sk_operasional'); ?>
		<?php echo $form->error($model,'tgl_sk_operasional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai_akreditasi_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akreditasi_akhir',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nilai_akreditasi_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_sk_BANPT'); ?>
		<?php echo $form->textField($model,'no_sk_BANPT',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'no_sk_BANPT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_PS'); ?>
		<?php echo $form->textField($model,'alamat_PS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telp_PS'); ?>
		<?php echo $form->textField($model,'telp_PS',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telp_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax_PS'); ?>
		<?php echo $form->textField($model,'fax_PS',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fax_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homepage_PS'); ?>
		<?php echo $form->textField($model,'homepage_PS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'homepage_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_PS'); ?>
		<?php echo $form->textField($model,'email_PS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'lampiran'); ?>
		<?php //echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->error($model,'lampiran'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->