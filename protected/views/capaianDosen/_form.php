<?php
/* @var $this CapaianDosenController */
/* @var $model CapaianDosen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'capaian-dosen-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian, dan pelayanan/pengabdian kepada masyarakat)</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'nama_dosen'); ?>
		<?php //echo $form->textField($model,'nama_dosen',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_dosen'); ?>
		<?php echo $form->dropDownList($model, 'nama_dosen', CHtml::listData(
		DataDosen::model()->findAll(), 'nama_dosen', 'nama_dosen'),
		array('prompt' => 'Pilih Dosen')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prestasi'); ?>
		<?php echo $form->error($model,'prestasi'); ?>
		<?php echo $form->textArea($model,'prestasi',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu'); ?><?php echo'(contoh: 2011)'?><br>
		<?php echo $form->error($model,'waktu'); ?>
		<?php echo $form->textField($model,'waktu',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tingkat'); ?>
		<?php echo $form->error($model,'tingkat'); ?>
		<?php echo $form->dropDownList($model,'tingkat',array('lokal'=>'Lokal','nasional'=>'Nasional','internasional'=>'Internasional'),array('prompt' => 'Pilih Tingkat Prestasi')); ?>
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