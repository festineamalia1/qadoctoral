<?php
/* @var $this RuangKerjaDosenController */
/* @var $model RuangKerjaDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ruang-kerja-dosen-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom Bertanda <span class="required">*</span> harus diisi.</p>

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
		<?php echo $form->labelEx($model,'ruang_kerja_dosen'); ?>
		<?php echo $form->textField($model,'ruang_kerja_dosen'); ?>
		<?php echo $form->error($model,'ruang_kerja_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_ruang'); ?>
		<?php echo $form->textField($model,'jumlah_ruang'); ?>
		<?php echo $form->error($model,'jumlah_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luas'); ?>
		<?php echo $form->textField($model,'luas'); ?>
		<?php echo $form->error($model,'luas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->