<?php
/* @var $this JudulPelayanandanpengabdianController */
/* @var $model JudulPelayanandanpengabdian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pelayana'); ?>
		<?php echo $form->textField($model,'id_pelayana'); ?>
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
		<?php echo $form->label($model,'judul_kegiatan_pengabdian'); ?>
		<?php echo $form->textField($model,'judul_kegiatan_pengabdian',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wkt_awl'); ?>
		<?php echo $form->textField($model,'wkt_awl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wkt_akh'); ?>
		<?php echo $form->textField($model,'wkt_akh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil'); ?>
		<?php echo $form->textField($model,'hasil',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dosen'); ?>
		<?php echo $form->textField($model,'id_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ts'); ?>
		<?php echo $form->textField($model,'ts',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_sumber_data'); ?>
		<?php echo $form->textField($model,'id_sumber_data'); ?>
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