<?php
/* @var $this DampakPenelitian_psController */
/* @var $model DampakPenelitian_ps */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dampakpenelitian'); ?>
		<?php echo $form->textField($model,'id_dampakpenelitian'); ?>
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
		<?php echo $form->label($model,'penjelasan_dampak'); ?>
		<?php echo $form->textArea($model,'penjelasan_dampak',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_penelitian'); ?>
		<?php echo $form->textField($model,'judul_penelitian',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_penelitian'); ?>
		<?php echo $form->textField($model,'jenis_penelitian',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'damp_produktifitas'); ?>
		<?php echo $form->textArea($model,'damp_produktifitas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'damp_kesejahteraan_masyarakat'); ?>
		<?php echo $form->textArea($model,'damp_kesejahteraan_masyarakat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'damp_mutu_lingkungan'); ?>
		<?php echo $form->textArea($model,'damp_mutu_lingkungan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sumber_data'); ?>
		<?php echo $form->textField($model,'id_sumber_data'); ?>
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