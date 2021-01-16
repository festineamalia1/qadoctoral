<?php
/* @var $this DetailEvaluasiLulusanController */
/* @var $model DetailEvaluasiLulusan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-evaluasi-lulusan-form',
	'enableAjaxValidation'=>false,
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
		<?php echo $form->labelEx($model,'jenis_kemampuan'); ?>
		<?php echo $form->error($model,'jenis_kemampuan'); ?>
		<?php echo $form->dropDownList($model,'jenis_kemampuan',array('pengembangan diri'=>'Pengembangan Diri','kerjasama'=>'Kerjasama','komunikasi'=>'Komunikasi','TI'=>'TI','bahasa'=>'Bahasa','keahlian'=>'Keahlian','integritas'=>'Integritas'),array('prompt' => 'Pilih Jenis Kemampuan')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggap_sangat_baik'); ?>
		<?php echo $form->error($model,'tanggap_sangat_baik'); ?>
		<?php echo $form->textField($model,'tanggap_sangat_baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggap_baik'); ?>
		<?php echo $form->error($model,'tanggap_baik'); ?>
		<?php echo $form->textField($model,'tanggap_baik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggap_cukup'); ?>
		<?php echo $form->error($model,'tanggap_cukup'); ?>
		<?php echo $form->textField($model,'tanggap_cukup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggap_kurang'); ?>
		<?php echo $form->error($model,'tanggap_kurang'); ?>
		<?php echo $form->textField($model,'tanggap_kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rencana_tindak_lanjut'); ?>
		<?php echo $form->error($model,'rencana_tindak_lanjut'); ?>
		<?php echo $form->textArea($model,'rencana_tindak_lanjut',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ketarangan'); ?>
		<?php echo $form->error($model,'ketarangan'); ?>
		<?php echo $form->textField($model,'ketarangan',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->