<?php
/* @var $this SubstansiPraktekController */
/* @var $model SubstansiPraktek */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_substansi'); ?>
		<?php echo $form->textField($model,'id_substansi'); ?>
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
		<?php echo $form->label($model,'kode_mk'); ?>
		<?php echo $form->textField($model,'kode_mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_modul'); ?>
		<?php echo $form->textField($model,'judul_modul',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam_pelaksanaan'); ?>
		<?php echo $form->textField($model,'jam_pelaksanaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi_praktek'); ?>
		<?php echo $form->textField($model,'lokasi_praktek',array('size'=>30,'maxlength'=>30)); ?>
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