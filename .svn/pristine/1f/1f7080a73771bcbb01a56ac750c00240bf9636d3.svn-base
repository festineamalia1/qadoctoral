<?php
/* @var $this TracerStudyController */
/* @var $model TracerStudy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tracer-study-form',
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
		<?php echo $form->labelEx($model,'jenis_kemampuan'); ?>
		<?php echo $form->textField($model,'jenis_kemampuan',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'jenis_kemampuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sangat_baik'); ?>
		<?php echo $form->textField($model,'sangat_baik',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sangat_baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baik'); ?>
		<?php echo $form->textField($model,'baik',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cukup'); ?>
		<?php echo $form->textField($model,'cukup',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cukup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kurang'); ?>
		<?php echo $form->textField($model,'kurang',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tindak_lanjut'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tindak_lanjut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rata2_wkt_tunggu'); ?>
		<?php echo $form->textField($model,'rata2_wkt_tunggu',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'rata2_wkt_tunggu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'persen_kerja_bidang'); ?>
		<?php echo $form->textField($model,'persen_kerja_bidang',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'persen_kerja_bidang'); ?>
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