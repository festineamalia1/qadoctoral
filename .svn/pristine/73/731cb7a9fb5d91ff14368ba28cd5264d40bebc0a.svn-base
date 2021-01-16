<?php
/* @var $this PrasaranaController */
/* @var $model Prasarana */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_prasarana'); ?>
		<?php echo $form->textField($model,'id_prasarana'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ruang_kerja'); ?>
		<?php echo $form->textField($model,'ruang_kerja',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_ruang'); ?>
		<?php echo $form->textField($model,'jml_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luasm2'); ?>
		<?php echo $form->textField($model,'luasm2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'F_uraian_aspek'); ?>
		<?php echo $form->textArea($model,'F_uraian_aspek',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'F_uraian_penilaian'); ?>
		<?php echo $form->textArea($model,'F_uraian_penilaian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->