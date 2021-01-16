<?php
/* @var $this DanaOperasionalController */
/* @var $model DanaOperasional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dana-operasional-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">kolom bertanda <span class="required">*</span> harus diisi.</p>

	
	<?php echo $form->errorSummary($model); ?>

	<?
	if(Yii::app()->user->group_id == 1){
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'id_prodi'); ?>
				<?php echo $form->dropDownList($model, 'id_prodi', CHtml::listData(
				Prodi::model()->findAll(), 'id_prodi', 'nama_prodi'),
				array('prompt' => 'Pilih Prodi')
				); ?>
			</div>
		<?
	}else{
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'id_prodi'); ?>
				<?php echo $form->dropDownList($model, 'id_prodi', CHtml::listData(
				Prodi::model()->findAllByAttributes(array('id_prodi'=>Yii::app()->user->group_id)), 'id_prodi', 'nama_prodi'),
				array('prompt' => 'Pilih Prodi')
				); ?>
			</div>
		<?
	}
?>
	<div class="row">
		<?php echo $form->labelEx($model,'id_administrasi'); ?>
		<?php echo $form->dropDownList($model, 'id_administrasi', CHtml::listData(
		Administrasi::model()->findAll(), 'id_administrasi', 'th_akademik'),
		array('prompt' => 'Pilih Administrasi')
		); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'TS2'); ?>
		<?php echo $form->textField($model,'TS2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TS2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TS1'); ?>
		<?php echo $form->textField($model,'TS1',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TS1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TS'); ?>
		<?php echo $form->textField($model,'TS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TS'); ?>
	</div>

	
<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save'); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->