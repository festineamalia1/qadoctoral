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
		<?php echo $form->label($model,'kepemilikan'); ?>
		<?php echo $form->textField($model,'kepemilikan',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilitas'); ?>
		<?php echo $form->textField($model,'utilitas',array('size'=>50,'maxlength'=>50)); ?>
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