<?php
/* @var $this KerjasamaDlm_psController */
/* @var $model KerjasamaDlm_ps */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kerjasama-dlm-ps-form',
	'enableAjaxValidation'=>false,
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
				<?php echo $form->error($model,'id_prodi'); ?>
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
				<?php echo $form->error($model,'id_prodi'); ?>
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
		<?php echo $form->error($model,'id_administrasi'); ?>
		<?php echo $form->dropDownList($model, 'id_administrasi', CHtml::listData(
		Administrasi::model()->findAll(), 'id_administrasi', 'th_akademik'),
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ts'); ?>
		<?php echo $form->error($model,'ts'); ?>
		<?php echo $form->dropDownList($model,'ts',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2'),array('prompt' => 'Pilih Tahun Akademik')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_instansi_dlm'); ?>
		<?php echo $form->textField($model,'nama_instansi_dlm',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'nama_instansi_dlm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kegiatan_dlm'); ?>
		<?php echo $form->textArea($model,'jenis_kegiatan_dlm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'jenis_kegiatan_dlm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_mulai_dlm'); ?>
		<?php echo $form->textField($model,'th_mulai_dlm',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'th_mulai_dlm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_akhir_dlm'); ?>
		<?php echo $form->textField($model,'th_akhir_dlm',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'th_akhir_dlm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manfaat_dlm'); ?>
		<?php echo $form->textArea($model,'manfaat_dlm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'manfaat_dlm'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->fileField($model,'lampiran',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->