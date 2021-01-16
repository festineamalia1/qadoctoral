<?php
/* @var $this Monitoring2Controller */
/* @var $model Monitoring2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_monitoring'); ?>
		<?php echo $form->textField($model,'id_monitoring'); ?>
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
		<?php echo $form->label($model,'pelaksanaan_ujian'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_ujian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usul_penelitian'); ?>
		<?php echo $form->textArea($model,'usul_penelitian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penulisan_disertasi'); ?>
		<?php echo $form->textArea($model,'penulisan_disertasi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kelayakan_dosen'); ?>
		<?php echo $form->textArea($model,'kelayakan_dosen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ujian_akhir'); ?>
		<?php echo $form->textArea($model,'ujian_akhir',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->label($model,'lampiran'); ?>
		<?php //echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'sumber_data'); ?>
		<?php //echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>1000)); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->