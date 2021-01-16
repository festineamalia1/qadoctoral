<?php
/* @var $this TopikPenelitianController */
/* @var $model TopikPenelitian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_topik'); ?>
		<?php echo $form->textField($model,'id_topik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topik_penelitian_disertasi'); ?>
		<?php echo $form->textField($model,'topik_penelitian_disertasi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_mhs_terlbt'); ?>
		<?php echo $form->textField($model,'jum_mhs_terlbt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_penelitian'); ?>
		<?php echo $form->textField($model,'judul_penelitian'); ?>
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

	<div class="row">
		<?php echo $form->label($model,'mhs_terlibat_disertasi'); ?>
		<?php echo $form->textField($model,'mhs_terlibat_disertasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->