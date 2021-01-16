<?php
/* @var $this FPenggantianController */
/* @var $model FPenggantian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fpenggantian-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'hal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PS'); ?>
		<?php echo $form->textField($model,'PS',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_difakultas'); ?>
		<?php echo $form->textField($model,'total_difakultas',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'total_difakultas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pandangan_fakultas'); ?>
		<?php echo $form->textArea($model,'pandangan_fakultas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pandangan_fakultas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->