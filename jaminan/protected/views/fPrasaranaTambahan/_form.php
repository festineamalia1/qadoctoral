<?php
/* @var $this FPrasaranaTambahanController */
/* @var $model FPrasaranaTambahan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fprasarana-tambahan-form',
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
		<?php echo $form->labelEx($model,'jenis_prasarana_tambahan'); ?>
		<?php echo $form->textField($model,'jenis_prasarana_tambahan',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'jenis_prasarana_tambahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'investasi_prasarana'); ?>
		<?php echo $form->textField($model,'investasi_prasarana',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'investasi_prasarana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rencana_investasis'); ?>
		<?php echo $form->textField($model,'rencana_investasis',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'rencana_investasis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_dana'); ?>
		<?php echo $form->textField($model,'sumber_dana',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'sumber_dana'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->