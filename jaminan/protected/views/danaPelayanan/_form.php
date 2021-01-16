<?php
/* @var $this DanaPelayananController */
/* @var $model DanaPelayanan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dana-pelayanan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom Betanda <span class="required">*</span> harus diisi.</p>

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
		<?php echo $form->labelEx($model,'Jdl_kegiatan_pelayanan'); ?>
		<?php echo $form->textField($model,'Jdl_kegiatan_pelayanan',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Jdl_kegiatan_pelayanan'); ?>
	</div>




	<div class="row">
		<?php echo $form->labelEx($model,'sumber_dana'); ?>
		<?php echo $form->error($model,'sumber_dana'); ?>
		<?php echo $form->dropDownList($model,'sumber_dana',array('pt sendiri' => 'PT Sendiri','yayasan' => 'Yayasan','diknas' => 'Diknas','lain' => 'Lain'),array('prompt' => 'Pilih Sumber Dana')); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'jenis_dana'); ?>
		<?php echo $form->textField($model,'jenis_dana',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jenis_dana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_dana'); ?>
		<?php echo $form->textField($model,'jml_dana',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jml_dana'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->