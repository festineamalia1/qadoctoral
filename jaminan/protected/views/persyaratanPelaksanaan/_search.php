<?php
/* @var $this PersyaratanPelaksanaanController */
/* @var $model PersyaratanPelaksanaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pp'); ?>
		<?php echo $form->textField($model,'id_pp'); ?>
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
		<?php echo $form->label($model,'p_mukin'); ?>
		<?php echo $form->textArea($model,'p_mukin',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_toefl'); ?>
		<?php echo $form->textArea($model,'p_toefl',array('rows'=>6, 'cols'=>50)); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'kuliah_ujian'); ?>
		<?php echo $form->textArea($model,'kuliah_ujian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ujian_kualifikasi'); ?>
		<?php echo $form->textArea($model,'ujian_kualifikasi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penyaajian_penilaian'); ?>
		<?php echo $form->textArea($model,'penyaajian_penilaian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peraturan_penyajian'); ?>
		<?php echo $form->textArea($model,'peraturan_penyajian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peraturan_publikasi'); ?>
		<?php echo $form->textArea($model,'peraturan_publikasi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penilaian'); ?>
		<?php echo $form->textArea($model,'penilaian',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tim_penguji'); ?>
		<?php echo $form->textArea($model,'tim_penguji',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->