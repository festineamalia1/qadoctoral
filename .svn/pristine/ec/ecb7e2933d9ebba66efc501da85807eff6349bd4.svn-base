<?php
/* @var $this AktivitasDosenTetapSetahunController */
/* @var $model AktivitasDosenTetapSetahun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aktivitas-dosen-tetap-setahun-form',
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
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php echo $form->textField($model,'nama_dosen',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_keahlian'); ?>
		<?php echo $form->textField($model,'bidang_keahlian',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'bidang_keahlian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_mk'); ?>
		<?php echo $form->textField($model,'kode_mk',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'kode_mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_mk'); ?>
		<?php echo $form->textField($model,'nama_mk',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_kelas'); ?>
		<?php echo $form->textField($model,'jum_kelas'); ?>
		<?php echo $form->error($model,'jum_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_rencana_pertemuan'); ?>
		<?php echo $form->textField($model,'jum_rencana_pertemuan'); ?>
		<?php echo $form->error($model,'jum_rencana_pertemuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_pertemuan_terlaksana'); ?>
		<?php echo $form->textField($model,'jum_pertemuan_terlaksana'); ?>
		<?php echo $form->error($model,'jum_pertemuan_terlaksana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_bidang'); ?>
		<?php echo $form->textField($model,'status_bidang',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'status_bidang'); ?>
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