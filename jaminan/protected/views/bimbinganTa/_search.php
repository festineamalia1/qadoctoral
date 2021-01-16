<?php
/* @var $this BimbinganTaController */
/* @var $model BimbinganTa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bimbingan_Tesis'); ?>
		<?php echo $form->textField($model,'id_bimbingan_Tesis'); ?>
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
		<?php echo $form->label($model,'pendidikan_tertinggi'); ?>
		<?php echo $form->textField($model,'pendidikan_tertinggi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan_dosen'); ?>
		<?php echo $form->textField($model,'jabatan_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_ketua'); ?>
		<?php echo $form->textField($model,'jml_ketua',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jml_anggota'); ?>
		<?php echo $form->textField($model,'jml_anggota',array('size'=>10,'maxlength'=>10)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->label($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div> -->

<?php $this->endWidget(); ?>

</div><!-- search-form -->