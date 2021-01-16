<?php
/* @var $this PrasaranaController */
/* @var $model Prasarana */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prasarana-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Tuliskan data ruang kerja dosen tetap yang bidang keahliannya sesuai dengan Program Studi.</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'ruang_kerja'); ?>
		<?php echo $form->error($model,'ruang_kerja'); ?>
		<?php echo $form->dropDownList($model,'ruang_kerja',array('1'=>'1 Ruang','2'=>'2 Ruang','3sd4'=>'3 sd 4 Ruang','lbh4'=>'Lebih dari 4'),array('prompt' => 'Pilih Ruang Kerja')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_ruang'); ?>
		<?php echo $form->error($model,'jml_ruang'); ?>
		<?php echo $form->textField($model,'jml_ruang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luasm2'); ?>
		<?php echo $form->error($model,'luasm2'); ?>
		<?php echo $form->textField($model,'luasm2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'F_uraian_aspek'); ?>
		<?php echo $form->error($model,'F_uraian_aspek'); ?>
		<?php echo $form->textArea($model,'F_uraian_aspek',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'F_uraian_penilaian'); ?>
		<?php echo $form->error($model,'F_uraian_penilaian'); ?>
		<?php echo $form->textArea($model,'F_uraian_penilaian',array('rows'=>6, 'cols'=>50)); ?>
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