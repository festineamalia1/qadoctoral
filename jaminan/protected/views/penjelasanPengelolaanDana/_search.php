<?php
/* @var $this PenjelasanPengelolaanDanaController */
/* @var $model PenjelasanPengelolaanDana */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_penjelasan'); ?>
		<?php echo $form->textField($model,'id_penjelasan'); ?>
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
		<?php echo $form->label($model,'penjelasan_pengelolaan'); ?>
		<?php echo $form->textArea($model,'penjelasan_pengelolaan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	

	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->