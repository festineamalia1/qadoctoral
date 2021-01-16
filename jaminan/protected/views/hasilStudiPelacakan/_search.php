<?php
/* @var $this HasilStudiPelacakanController */
/* @var $model HasilStudiPelacakan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_hsp'); ?>
		<?php echo $form->textField($model,'id_hsp'); ?>
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
		<?php echo $form->label($model,'jenis_kemampuan'); ?>
		<?php echo $form->textField($model,'jenis_kemampuan',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'pemanfaatan_hsp'); ?>
		<?php echo $form->textArea($model,'pemanfaatan_hsp',array('rows'=>6, 'cols'=>50)); ?>
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