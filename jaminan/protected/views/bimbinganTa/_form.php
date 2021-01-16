<?php
/* @var $this BimbinganTaController */
/* @var $model BimbinganTa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bimbingan-tesis
	-form',
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
		<?php echo $form->labelEx($model,'id_dosen'); ?>
		<?php echo $form->dropDownList($model, 'id_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'id_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_dosen'); ?>
		<?php echo $form->textField($model,'jabatan_dosen',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jabatan_dosen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendidikan_tertinggi'); ?>
		<?php echo $form->textField($model,'pendidikan_tertinggi',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pendidikan_tertinggi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_ketua'); ?>
		<?php echo $form->textField($model,'jml_ketua',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jml_ketua'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_anggota'); ?>
		<?php echo $form->textField($model,'jml_anggota',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jml_anggota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
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