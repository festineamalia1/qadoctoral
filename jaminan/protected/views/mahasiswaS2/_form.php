<?php
/* @var $this MahasiswaS2Controller */
/* @var $model MahasiswaS2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-s2-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nim_s2'); ?>
		<?php echo $form->textField($model,'nim_s2',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nim_s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_mhs_s2'); ?>
		<?php echo $form->textField($model,'nama_mhs_s2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_mhs_s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_mhs'); ?>
		<?php echo $form->textArea($model,'alamat_mhs',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat_mhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'daerah_asal'); ?>
		<?php echo $form->textField($model,'daerah_asal',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'daerah_asal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->