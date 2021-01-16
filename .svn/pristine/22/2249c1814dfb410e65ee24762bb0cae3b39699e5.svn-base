<?php
/* @var $this AdministrasiController */
/* @var $model Administrasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrasi-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'th_akademik'); ?>
		<?php echo $form->error($model,'th_akademik'); ?>
		<?php echo $form->textField($model,'th_akademik',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_akreditasi'); ?>
		<?php echo $form->error($model,'th_akreditasi'); ?>
		<?php echo $form->textField($model,'th_akreditasi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->