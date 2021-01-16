<?php
/* @var $this MahasiswaS2Controller */
/* @var $model MahasiswaS2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mhs_s2'); ?>
		<?php echo $form->textField($model,'id_mhs_s2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nim_s2'); ?>
		<?php echo $form->textField($model,'nim_s2',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_mhs_s2'); ?>
		<?php echo $form->textField($model,'nama_mhs_s2',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_mhs'); ?>
		<?php echo $form->textArea($model,'alamat_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daerah_asal'); ?>
		<?php echo $form->textField($model,'daerah_asal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->