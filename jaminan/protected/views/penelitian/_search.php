<?php
/* @var $this PenelitianController */
/* @var $model penelitian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_penelitian_dosentetap_ps_s3'); ?>
		<?php echo $form->textField($model,'id_penelitian_dosentetap_ps_s3'); ?>
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
		<?php echo $form->label($model,'tgl_penelitian_awal'); ?>
		<?php echo $form->textField($model,'tgl_penelitian_awal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_penelitian_akhir'); ?>
		<?php echo $form->textField($model,'tgl_penelitian_akhir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_penelitian'); ?>
		<?php echo $form->textField($model,'status_penelitian',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul_penelitian'); ?>
		<?php echo $form->textField($model,'judul_penelitian',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_penelitian'); ?>
		<?php echo $form->textField($model,'jumlah_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ts'); ?>
		<?php echo $form->textField($model,'ts',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dosen'); ?>
		<?php echo $form->textField($model,'id_dosen'); ?>
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
		<?php echo $form->label($model,'Ts0'); ?>
		<?php echo $form->textField($model,'Ts0'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ts1'); ?>
		<?php echo $form->textField($model,'Ts1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ts2'); ?>
		<?php echo $form->textField($model,'Ts2'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Ts3'); ?>
		<?php echo $form->textField($model,'Ts3'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Ts4'); ?>
		<?php echo $form->textField($model,'Ts4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biaya'); ?>
		<?php echo $form->textField($model,'biaya',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->