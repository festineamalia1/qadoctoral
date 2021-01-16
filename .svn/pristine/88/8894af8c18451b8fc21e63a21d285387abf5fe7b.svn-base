<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'monitoring-form',
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
		<?php echo $form->labelEx($model,'kehadiran_dosen'); ?>
		<?php echo $form->textArea($model,'kehadiran_dosen',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kehadiran_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kehadiran_mhs'); ?>
		<?php echo $form->textArea($model,'kehadiran_mhs',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kehadiran_mhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mek_penyusunan_mk'); ?>
		<?php echo $form->textArea($model,'mek_penyusunan_mk',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mek_penyusunan_mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket_tambahan'); ?>
		<?php echo $form->textArea($model,'ket_tambahan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ket_tambahan'); ?>
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
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->