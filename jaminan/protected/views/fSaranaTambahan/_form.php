<?php
/* @var $this FSaranaTambahanController */
/* @var $model FSaranaTambahan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fsarana-tambahan-form',
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
		<?php echo $form->labelEx($model,'investasi_sarana'); ?>
		<?php echo $form->textField($model,'investasi_sarana',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'investasi_sarana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rencana_investasi'); ?>
		<?php echo $form->textField($model,'rencana_investasi',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'rencana_investasi'); ?>
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