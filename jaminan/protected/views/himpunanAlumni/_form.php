<?php
/* @var $this HimpunanAlumniController */
/* @var $model HimpunanAlumni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'himpunan-alumni-form',
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
		array('prompt' => 'Pilih Administrasi')
		); ?>
	</div>
<!-- end tambahan -->

	<div class="row">
		<?php echo $form->labelEx($model,'aktivitas'); ?>
		<?php echo $form->error($model,'aktivitas'); ?>
		<?php echo $form->textArea($model,'aktivitas',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_kegiatan'); ?>
		<?php echo $form->error($model,'hasil_kegiatan'); ?>
		<?php echo $form->textArea($model,'hasil_kegiatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kegiatan'); ?>
		<?php echo $form->dropDownList($model,'jenis_kegiatan',array('akademik'=>'Akademik','non'=>'Non Akademik'),array('prompt' => 'Pilih Jenis Kegiatan')); ?>
		<?php echo $form->error($model,'jenis_kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumbangan_dana'); ?>
		<?php echo $form->error($model,'sumbangan_dana'); ?>
		<?php echo $form->textArea($model,'sumbangan_dana',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumbangan_fasilitas'); ?>
		<?php echo $form->error($model,'sumbangan_fasilitas'); ?>
		<?php echo $form->textArea($model,'sumbangan_fasilitas',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'libat_kegiatan'); ?>
		<?php echo $form->error($model,'libat_kegiatan'); ?>
		<?php echo $form->textArea($model,'libat_kegiatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kembang_jejaring'); ?>
		<?php echo $form->error($model,'kembang_jejaring'); ?>
		<?php echo $form->textArea($model,'kembang_jejaring',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sedia_fasilitas'); ?>
		<?php echo $form->error($model,'sedia_fasilitas'); ?>
		<?php echo $form->textArea($model,'sedia_fasilitas',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
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