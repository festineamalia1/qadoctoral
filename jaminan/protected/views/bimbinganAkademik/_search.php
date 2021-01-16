<?php
/* @var $this BimbinganAkademikController */
/* @var $model BimbinganAkademik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bimbingan'); ?>
		<?php echo $form->textField($model,'id_bimbingan'); ?>
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
		<?php echo $form->label($model,'id_dosen'); ?>
		<?php echo $form->textField($model,'id_dosen'); ?>
	</div>

	
 	

	<div class="row">
		<?php echo $form->label($model,'jabatan_dosen'); ?>
		<?php echo $form->textField($model,'jabatan_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_promotor'); ?>
		<?php echo $form->textField($model,'jml_promotor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_kopromotor'); ?>
		<?php echo $form->textField($model,'jml_kopromotor',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_anggota'); ?>
		<?php echo $form->textField($model,'jml_anggota',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'rata_penyelesaian'); ?>
		<?php echo $form->textField($model,'rata_penyelesaian',array('size'=>10,'maxlength'=>10)); ?>
	</div>-->


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