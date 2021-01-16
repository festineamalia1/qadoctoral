<?php
/* @var $this FDanaPenelitianController */
/* @var $model FDanaPenelitian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fdana-penelitian-form',
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
		<?php echo $form->labelEx($model,'TS'); ?>
		<?php echo $form->textField($model,'TS',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'TS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_judul'); ?>
		<?php echo $form->textField($model,'jumlah_judul',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jumlah_judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_dana'); ?>
		<?php echo $form->textField($model,'total_dana',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'total_dana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian_pimpinan'); ?>
		<?php echo $form->textArea($model,'uraian_pimpinan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'uraian_pimpinan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->