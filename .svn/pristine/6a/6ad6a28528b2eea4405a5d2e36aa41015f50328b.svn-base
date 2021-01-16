<?php
/* @var $this PrestasiMhsPortalController */
/* @var $model PrestasiMhsPortal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestasi-mhs-portal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nim'); ?>
		<?php echo $form->textField($model,'nim',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jur'); ?>
		<?php echo $form->textField($model,'jur',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan'); ?>
		<?php echo $form->textField($model,'kegiatan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ttgl'); ?>
		<?php echo $form->textField($model,'ttgl',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'ttgl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat'); ?>
		<?php echo $form->textField($model,'tempat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyelenggara'); ?>
		<?php echo $form->textField($model,'penyelenggara',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'penyelenggara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prestasi'); ?>
		<?php echo $form->textField($model,'prestasi',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'prestasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tingkat'); ?>
		<?php echo $form->textField($model,'tingkat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tingkat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis'); ?>
		<?php echo $form->textField($model,'jenis',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jenis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->