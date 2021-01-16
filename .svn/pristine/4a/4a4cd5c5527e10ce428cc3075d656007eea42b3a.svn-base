<?php
/* @var $this TugasBljDosenController */
/* @var $model TugasBljDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tugas-blj-dosen-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

	<!-- tambahan -->
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
<!-- end tambahan -->

	<div class="row">
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php //echo $form->textField($model,'nama_dosen',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_dosen'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan_lanjut'); ?>
		<?php echo $form->error($model,'pendidikan_lanjut'); ?>
		<?php echo $form->textField($model,'pendidikan_lanjut',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bidang_studi'); ?>
		<?php echo $form->error($model,'bidang_studi'); ?>
		<?php echo $form->textField($model,'bidang_studi',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PT'); ?>
		<?php echo $form->error($model,'PT'); ?>
		<?php echo $form->textField($model,'PT',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negara'); ?>
		<?php echo $form->error($model,'negara'); ?>
		<?php echo $form->textField($model,'negara',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_mulai_studi'); ?>
		<?php echo $form->error($model,'th_mulai_studi'); ?>
		<?php echo $form->textField($model,'th_mulai_studi',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
	</div>

<!-- tambahan -->
	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'lampiran'); ?>
		<?php // echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->fileField($model,'lampiran',array('size'=>50,'maxlength'=>50)); ?>
		<?php //echo $form->error($model,'lampiran'); ?>
	</div> -->
<!-- end tambahan -->


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->