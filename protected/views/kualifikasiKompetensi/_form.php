<?php
/* @var $this KualifikasiKompetensiController */
/* @var $model KualifikasiKompetensi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kualifikasi-kompetensi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
		<?php echo $form->error($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
		<?php echo $form->error($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upaya_kegiatan'); ?>
		<?php echo $form->textArea($model,'upaya_kegiatan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'upaya_kegiatan'); ?>
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