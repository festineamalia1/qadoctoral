<?php
/* @var $this FPenggantianController */
/* @var $model FPenggantian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ganti'); ?>
		<?php echo $form->textField($model,'id_ganti'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hal'); ?>
		<?php echo $form->textField($model,'hal',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PS'); ?>
		<?php echo $form->textField($model,'PS',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_difakultas'); ?>
		<?php echo $form->textField($model,'total_difakultas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pandangan_fakultas'); ?>
		<?php echo $form->textArea($model,'pandangan_fakultas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->