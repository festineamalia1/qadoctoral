<?php
/* @var $this KerjasamaController */
/* @var $model Kerjasama */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kerjasama-form',
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
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>
<!-- selesai tambahan -->

	<div class="row">
		<?php echo $form->labelEx($model,'nama_instansi'); ?>
		<?php echo $form->error($model,'nama_instansi'); ?>
		<?php echo $form->textField($model,'nama_instansi',array('size'=>225,'maxlength'=>225)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kegiatan'); ?>
		<?php echo $form->error($model,'jenis_kegiatan'); ?>
		<?php echo $form->textarea($model,'jenis_kegiatan',array('size'=>500,'maxlength'=>500,'rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_mulai'); ?><?php echo "<i>(contoh pengisian: 2013)</i>";?><br>
		<?php echo $form->error($model,'th_mulai'); ?>
		<?php echo $form->textField($model,'th_mulai',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'th_akhir'); ?><?php echo "<i>(contoh pengisian: 2013)</i>";?><br>
		<?php echo $form->error($model,'th_akhir'); ?>
		<?php echo $form->textField($model,'th_akhir',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manfaat'); ?>
		<?php echo $form->error($model,'manfaat'); ?>
		<?php echo $form->textArea($model,'manfaat',array('size'=>255,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kerjasama'); ?>
		<?php echo $form->error($model,'jenis_kerjasama'); ?>
		<?php echo $form->dropDownList($model,'jenis_kerjasama',array('dlm negeri'=>'Dalam Negeri','luar negeri'=>'Luar Negeri'),array('prompt' => 'Pilih Jenis Kerjasama')); ?>
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