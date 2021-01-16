<?php
/* @var $this MhsNonRegulerController */
/* @var $model MhsNonReguler */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mhs-non-reguler-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
	
<!-- tambahan -->
	<?php echo "<b>Tuliskan data mahasiswa non-reguler dalam lima tahun terakhir.</b>";?><br><br>
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
<!-- end tambahan -->
	
	<div class="row">
		<?php echo $form->labelEx($model,'th_akademik'); ?>
		<?php echo $form->error($model,'th_akademik'); ?>
		<?php echo $form->dropDownList($model,'th_akademik',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2','TS-3'=>'TS-3','TS-4'=>'TS-4'),array('prompt' => 'Pilih Tahun Akademik')); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'daya_tampung'); ?>
		<?php echo $form->error($model,'daya_tampung'); ?>
		<?php echo $form->textField($model,'daya_tampung',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_ikut_seleksi'); ?>
		<?php echo $form->error($model,'jml_ikut_seleksi'); ?>
		<?php echo $form->textField($model,'jml_ikut_seleksi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_lulus_seleksi'); ?>
		<?php echo $form->error($model,'jml_lulus_seleksi'); ?>
		<?php echo $form->textField($model,'jml_lulus_seleksi',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_maba_nonreg'); ?>
		<?php echo $form->error($model,'jml_maba_nonreg'); ?>
		<?php echo $form->textField($model,'jml_maba_nonreg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jml_transfer'); ?>
		<?php echo $form->error($model,'jml_transfer'); ?>
		<?php echo $form->textField($model,'jml_transfer',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tot_mhs_nonreg'); ?>
		<?php echo $form->error($model,'tot_mhs_nonreg'); ?>
		<?php echo $form->textField($model,'tot_mhs_nonreg',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tot_transfer'); ?>
		<?php echo $form->error($model,'tot_transfer'); ?>
		<?php echo $form->textField($model,'tot_transfer',array('size'=>10,'maxlength'=>10)); ?>
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