<?php
/* @var $this AktivitasDosenTetapSemesterController */
/* @var $model AktivitasDosenTetapSemester */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aktivitas-dosen-tetap-semester-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Aktivitas dosen tetap yang bidang keahliannya sesuai dengan PS dinyatakan dalam sks rata-rata per semester pada satu tahun akademik
terakhir, diisi dengan perhitungan sesuai SK Dirjen DIKTI no. 48 tahun 1983 (12 sks setara dengan 36 jam kerja per minggu)</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'nama_dosen_tetap'); ?>
		<?php //echo $form->textField($model,'nama_dosen_tetap',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_dosen_tetap'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen_tetap', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_PSsendiri'); ?>
		<?php echo $form->error($model,'sks_PSsendiri'); ?>
		<?php echo $form->textField($model,'sks_PSsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_PSlain_PTsendiri'); ?>
		<?php echo $form->error($model,'sks_PSlain_PTsendiri'); ?>
		<?php echo $form->textField($model,'sks_PSlain_PTsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_PSPTlain'); ?>
		<?php echo $form->error($model,'sks_PSPTlain'); ?>
		<?php echo $form->textField($model,'sks_PSPTlain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_penelitian'); ?>
		<?php echo $form->error($model,'sks_penelitian'); ?>
		<?php echo $form->textField($model,'sks_penelitian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_pkm'); ?>
		<?php echo $form->error($model,'sks_pkm'); ?>
		<?php echo $form->textField($model,'sks_pkm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_manajemen_PTsendiri'); ?>
		<?php echo $form->error($model,'sks_manajemen_PTsendiri'); ?>
		<?php echo $form->textField($model,'sks_manajemen_PTsendiri'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sks_manajemen_PTlain'); ?>
		<?php echo $form->error($model,'sks_manajemen_PTlain'); ?>
		<?php echo $form->textField($model,'sks_manajemen_PTlain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jum_sks'); ?>
		<?php echo $form->error($model,'jum_sks'); ?>
		<?php echo $form->textField($model,'jum_sks'); ?>
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