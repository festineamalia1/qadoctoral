<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_prodi'); ?>
		<?php echo $form->textField($model,'id_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_administrasi'); ?>
		<?php echo $form->textField($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_prodi'); ?>
		<?php echo $form->textField($model,'nama_prodi',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sk'); ?>
		<?php echo $form->textField($model,'no_sk',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_sk'); ?>
		<?php echo $form->textField($model,'tgl_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pejabat_sk'); ?>
		<?php echo $form->textField($model,'pejabat_sk',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bln_thn_PS'); ?>
		<?php echo $form->textField($model,'bln_thn_PS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sk_operasional'); ?>
		<?php echo $form->textField($model,'no_sk_operasional',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_sk_operasional'); ?>
		<?php echo $form->textField($model,'tgl_sk_operasional'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai_akreditasi_akhir'); ?>
		<?php echo $form->textField($model,'nilai_akreditasi_akhir',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_sk_BANPT'); ?>
		<?php echo $form->textField($model,'no_sk_BANPT',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_PS'); ?>
		<?php echo $form->textField($model,'alamat_PS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telp_PS'); ?>
		<?php echo $form->textField($model,'telp_PS',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fax_PS'); ?>
		<?php echo $form->textField($model,'fax_PS',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homepage_PS'); ?>
		<?php echo $form->textField($model,'homepage_PS',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_PS'); ?>
		<?php echo $form->textField($model,'email_PS',array('size'=>30,'maxlength'=>30)); ?>
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