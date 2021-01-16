<?php
/* @var $this KeberlanjutanS3Controller */
/* @var $model KeberlanjutanS3 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_keberlanjutan_s3'); ?>
		<?php echo $form->textField($model,'id_keberlanjutan_s3'); ?>
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
		<?php echo $form->label($model,'animo_calon_mhs'); ?>
		<?php echo $form->textArea($model,'animo_calon_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutu_manajemen'); ?>
		<?php echo $form->textArea($model,'mutu_manajemen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutu_lulusan'); ?>
		<?php echo $form->textArea($model,'mutu_lulusan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kerjasama_kemitraan'); ?>
		<?php echo $form->textArea($model,'kerjasama_kemitraan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dana_sumber_selain_mahasiswa'); ?>
		<?php echo $form->textArea($model,'dana_sumber_selain_mahasiswa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->