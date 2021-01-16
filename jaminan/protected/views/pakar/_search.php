<?php
/* @var $this PakarController */
/* @var $model Pakar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pakar'); ?>
		<?php echo $form->textField($model,'id_pakar'); ?>
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
	
	<!-- <div class="row">
		<?php //echo $form->label($model,'nama_dosen'); ?>
		<?php //echo $form->textField($model,'nama_dosen',array('size'=>30,'maxlength'=>30)); ?>
	</div> -->

	<div class="row">
		<?php echo $form->label($model,'nama_lembaga'); ?>
		<?php echo $form->textField($model,'nama_lembaga',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kurun_waktu'); ?>
		<?php echo $form->textField($model,'kurun_waktu',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tingkat'); ?>
		<?php echo $form->textField($model,'tingkat',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sebagai'); ?>
		<?php echo $form->textField($model,'sebagai',array('size'=>13,'maxlength'=>13)); ?>
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