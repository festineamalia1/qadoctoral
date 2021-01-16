<?php
/* @var $this DanaPelayananController */
/* @var $model DanaPelayanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dana_pelayanan'); ?>
		<?php echo $form->textField($model,'id_dana_pelayanan'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->label($model,'Jdl_kegiatan_pelayanan'); ?>
		<?php echo $form->textField($model,'Jdl_kegiatan_pelayanan',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_dana'); ?>
		<?php echo $form->textField($model,'sumber_dana',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_dana'); ?>
		<?php echo $form->textField($model,'jenis_dana',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_dana'); ?>
		<?php echo $form->textField($model,'jml_dana',array('size'=>30,'maxlength'=>30)); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->