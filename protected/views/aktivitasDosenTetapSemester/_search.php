<?php
/* @var $this AktivitasDosenTetapSemesterController */
/* @var $model AktivitasDosenTetapSemester */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_aktivitas'); ?>
		<?php echo $form->textField($model,'id_aktivitas'); ?>
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
		<?php echo $form->label($model,'nama_dosen_tetap'); ?>
		<?php echo $form->textField($model,'nama_dosen_tetap',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_PSsendiri'); ?>
		<?php echo $form->textField($model,'sks_PSsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_PSlain_PTsendiri'); ?>
		<?php echo $form->textField($model,'sks_PSlain_PTsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_PSPTlain'); ?>
		<?php echo $form->textField($model,'sks_PSPTlain'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_penelitian'); ?>
		<?php echo $form->textField($model,'sks_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_pkm'); ?>
		<?php echo $form->textField($model,'sks_pkm'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_manajemen_PTsendiri'); ?>
		<?php echo $form->textField($model,'sks_manajemen_PTsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sks_manajemen_PTlain'); ?>
		<?php echo $form->textField($model,'sks_manajemen_PTlain'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_sks'); ?>
		<?php echo $form->textField($model,'jum_sks'); ?>
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