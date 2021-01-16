<?php
/* @var $this Pengabdi_s2Controller */
/* @var $model Pengabdi_s2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengabdi-s2-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),

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
				<?php echo $form->error($model,'id_prodi'); ?>
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
				<?php echo $form->error($model,'id_prodi'); ?>
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
		<?php echo $form->error($model,'id_administrasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_biaya'); ?>
		<?php echo $form->error($model,'sumber_biaya'); ?>
		<?php echo $form->dropDownList($model,'sumber_biaya',array('sendiri'=>'Sendiri','pt'=>'PT yang bersangkutan','depdiknas'=>'Depdiknas','dlm negeri'=>'Institusi dalam negeri luar depdiknas','luar negeri'=>'Institusi Luar Negeri'),array('prompt' => 'Pilih Sumber Pembiayaan')); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'judul_pengabdian'); ?>
		<?php echo $form->textField($model,'judul_pengabdian'); ?>
		<?php echo $form->error($model,'judul_pengabdian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_ts'); ?>
		<?php echo $form->textField($model,'waktu_ts'); ?>
		<?php echo $form->error($model,'waktu_ts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_ts1'); ?>
		<?php echo $form->textField($model,'waktu_ts1'); ?>
		<?php echo $form->error($model,'waktu_ts1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_ts2'); ?>
		<?php echo $form->textField($model,'waktu_ts2'); ?>
		<?php echo $form->error($model,'waktu_ts2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->