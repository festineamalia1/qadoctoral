<?php
/* @var $this TenagaKependidikanController */
/* @var $model TenagaKependidikan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tenaga_kependidikan'); ?>
		<?php echo $form->textField($model,'id_tenaga_kependidikan'); ?>
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
		<?php echo $form->label($model,'jenis_tenaga'); ?>
		<?php echo $form->textField($model,'jenis_tenaga',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumS3'); ?>
		<?php echo $form->textField($model,'jumS3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumS2'); ?>
		<?php echo $form->textField($model,'jumS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumS1'); ?>
		<?php echo $form->textField($model,'jumS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumD4'); ?>
		<?php echo $form->textField($model,'jumD4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumD3'); ?>
		<?php echo $form->textField($model,'jumD3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumD2'); ?>
		<?php echo $form->textField($model,'jumD2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumD1'); ?>
		<?php echo $form->textField($model,'jumD1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumSMA'); ?>
		<?php echo $form->textField($model,'jumSMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumSMK'); ?>
		<?php echo $form->textField($model,'jumSMK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_kerja'); ?>
		<?php echo $form->textField($model,'unit_kerja',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upaya_peningkatan_kompetensi'); ?>
		<?php echo $form->textArea($model,'upaya_peningkatan_kompetensi',array('rows'=>6, 'cols'=>50)); ?>
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