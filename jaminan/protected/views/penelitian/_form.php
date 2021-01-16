<?php
/* @var $this PenelitianController */
/* @var $model penelitian */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penelitian-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
	


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
		<?php echo $form->labelEx($model,'ts'); ?>
		<?php echo $form->error($model,'ts'); ?>
		<?php echo $form->dropDownList($model,'ts',array('TS'=>'TS','TS-1'=>'TS-1','TS-2'=>'TS-2','TS-3'=>'TS-3','TS4'=>'TS-4'),array('prompt' => 'Tahun Akademik')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dosen'); ?>
		<?php echo $form->dropDownList($model,'id_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'id_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'judul_penelitian'); ?>
		<?php echo $form->textField($model,'judul_penelitian',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judul_penelitian'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'tgl_penelitian_awal'); ?>
		<?php //echo $form->textField($model,'tgl_penelitian_awal'); ?>
		<?php //echo $form->error($model,'tgl_penelitian_awal'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'tgl_penelitian_akhir'); ?>
		<?php //echo $form->textField($model,'tgl_penelitian_akhir'); ?>
		<?php //echo $form->error($model,'tgl_penelitian_akhir'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'biaya'); ?>
		<?php echo $form->error($model,'biaya'); ?>
		<?php echo $form->dropDownList($model,'biaya',array('sendiri'=>'Sendiri','pt'=>'PT yang bersangkutan','depdiknas'=>'Depdiknas','dlm negeri'=>'Institusi dalam negeri luar depdiknas','luar negeri'=>'Institusi Luar Negeri'),array('prompt' => 'Pilih Sumber Pembiayaan')); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ts0'); ?>
		<?php echo $form->textField($model,'Ts0'); ?>
		<?php echo $form->error($model,'Ts0'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ts1'); ?>
		<?php echo $form->textField($model,'Ts1'); ?>
		<?php echo $form->error($model,'Ts1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ts2'); ?>
		<?php echo $form->textField($model,'Ts2'); ?>
		<?php echo $form->error($model,'Ts2'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Ts3'); ?>
		<?php echo $form->textField($model,'Ts3'); ?>
		<?php echo $form->error($model,'Ts3'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Ts4'); ?>
		<?php echo $form->textField($model,'Ts4'); ?>
		<?php echo $form->error($model,'Ts4'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->fileField($model,'lampiran',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->