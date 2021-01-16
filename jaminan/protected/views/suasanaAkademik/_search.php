<?php
/* @var $this SuasanaAkademikController */
/* @var $model SuasanaAkademik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_suasana'); ?>
		<?php echo $form->textField($model,'id_suasana'); ?>
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
		<?php echo $form->label($model,'suasana_akademik'); ?>
		<?php echo $form->textArea($model,'suasana_akademik',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ketersediaan_kelengkapan'); ?>
		<?php echo $form->textArea($model,'ketersediaan_kelengkapan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interaksi_akademik'); ?>
		<?php echo $form->textArea($model,'interaksi_akademik',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upaya_ps'); ?>
		<?php echo $form->textArea($model,'upaya_ps',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->