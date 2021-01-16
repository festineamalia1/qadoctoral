<?php
/* @var $this AktivitasDosenSetahunController */
/* @var $model AktivitasDosenSetahun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_aktivitas_setahun'); ?>
		<?php echo $form->textField($model,'id_aktivitas_setahun'); ?>
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
		<?php echo $form->label($model,'nama_dosen'); ?>
		<?php echo $form->textField($model,'nama_dosen',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bidang_keahlian'); ?>
		<?php echo $form->textField($model,'bidang_keahlian',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_mk'); ?>
		<?php echo $form->textField($model,'kode_mk',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_mk'); ?>
		<?php echo $form->textField($model,'nama_mk',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_kelas'); ?>
		<?php echo $form->textField($model,'jum_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_rencana_pertemuan'); ?>
		<?php echo $form->textField($model,'jum_rencana_pertemuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jum_pertemuan_terlaksana'); ?>
		<?php echo $form->textField($model,'jum_pertemuan_terlaksana'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_dosen'); ?>
		<?php echo $form->textField($model,'status_dosen',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_bidang'); ?>
		<?php echo $form->textField($model,'status_bidang',array('size'=>15,'maxlength'=>15)); ?>
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