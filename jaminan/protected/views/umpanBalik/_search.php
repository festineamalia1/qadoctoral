<?php
/* @var $this UmpanBalikController */
/* @var $model UmpanBalik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_umpan_balik'); ?>
		<?php echo $form->textField($model,'id_umpan_balik'); ?>
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
		<?php echo $form->label($model,'umpan_balik_dosen'); ?>
		<?php echo $form->textArea($model,'umpan_balik_dosen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_dosen'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_dosen',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_mhs'); ?>
		<?php echo $form->textArea($model,'umpan_balik_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_mhs'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_alumni'); ?>
		<?php echo $form->textArea($model,'umpan_balik_alumni',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_alumni'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_alumni',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'umpan_balik_lulusan'); ?>
		<?php echo $form->textArea($model,'umpan_balik_lulusan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tindak_lanjut_lulusan'); ?>
		<?php echo $form->textArea($model,'tindak_lanjut_lulusan',array('rows'=>6, 'cols'=>50)); ?>
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