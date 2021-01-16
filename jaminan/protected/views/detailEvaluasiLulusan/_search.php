<?php
/* @var $this DetailEvaluasiLulusanController */
/* @var $model DetailEvaluasiLulusan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_detail'); ?>
		<?php echo $form->textField($model,'id_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kemampuan'); ?>
		<?php echo $form->textField($model,'jenis_kemampuan',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggap_sangat_baik'); ?>
		<?php echo $form->textField($model,'tanggap_sangat_baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggap_baik'); ?>
		<?php echo $form->textField($model,'tanggap_baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggap_cukup'); ?>
		<?php echo $form->textField($model,'tanggap_cukup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggap_kurang'); ?>
		<?php echo $form->textField($model,'tanggap_kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rencana_tindak_lanjut'); ?>
		<?php echo $form->textArea($model,'rencana_tindak_lanjut',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ketarangan'); ?>
		<?php echo $form->textField($model,'ketarangan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->