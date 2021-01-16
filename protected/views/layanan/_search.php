<?php
/* @var $this LayananController */
/* @var $model Layanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_layanan'); ?>
		<?php echo $form->textField($model,'id_layanan'); ?>
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
		<?php echo $form->label($model,'kegiatan_BK'); ?>
		<?php echo $form->textArea($model,'kegiatan_BK',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan_BK'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_BK',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_BK'); ?>
		<?php echo $form->textArea($model,'hasil_BK',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_minat'); ?>
		<?php echo $form->textArea($model,'kegiatan_minat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan_minat'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_minat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_minat'); ?>
		<?php echo $form->textArea($model,'hasil_minat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_softskill'); ?>
		<?php echo $form->textArea($model,'kegiatan_softskill',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan_softskill'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_softskill',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_softskill'); ?>
		<?php echo $form->textArea($model,'hasil_softskill',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_beasiswa'); ?>
		<?php echo $form->textArea($model,'kegiatan_beasiswa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan_beasiswa'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_beasiswa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_beasiswa'); ?>
		<?php echo $form->textArea($model,'hasil_beasiswa',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kegiatan_kesehatan'); ?>
		<?php echo $form->textArea($model,'kegiatan_kesehatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pelaksanaan_kesehatan'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_kesehatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasil_kesehatan'); ?>
		<?php echo $form->textArea($model,'hasil_kesehatan',array('rows'=>6, 'cols'=>50)); ?>
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