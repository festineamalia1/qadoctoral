<?php
/* @var $this MkKurikulumController */
/* @var $model MkKurikulum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mk-kurikulum-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_mk'); ?>
		<?php echo $form->textField($model,'kode_mk',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'kode_mk'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'semester'); ?>
		<?php echo $form->textField($model,'semester',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_mk'); ?>
		<?php echo $form->textField($model,'nama_mk',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bobot_sks'); ?>
		<?php echo $form->textField($model,'bobot_sks',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'bobot_sks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_sks'); ?>
		<?php echo $form->dropDownList($model,'jenis_sks',array('inti'=>'Inti','institusional'=>'Institusional'),array('prompt' => 'Pilih Jenis Sks')); ?>
		<?php echo $form->error($model,'jenis_sks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bobot_tgs'); ?>
		<?php echo $form->dropDownList($model,'bobot_tgs',array('ya'=>'Ya','tidak'=>'Tidak'),array('prompt' => 'Bobot Tugas')); ?>
		<?php echo $form->error($model,'bobot_tgs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelengkapan_deskripsi'); ?>
		<?php echo $form->dropDownList($model,'kelengkapan_deskripsi',array('ya'=>'Ya','tidak'=>'Tidak'),array('prompt' => 'Kelengkapan Deskripsi')); ?>
		<?php echo $form->error($model,'kelengkapan_deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelengkapan_silabus'); ?>
		<?php echo $form->dropDownList($model,'kelengkapan_silabus',array('ya'=>'Ya','tidak'=>'Tidak'),array('prompt' => 'Kelengkapan Silabus')); ?>
		<?php echo $form->error($model,'kelengkapan_silabus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelengkapan_SAP'); ?>
		<?php echo $form->dropDownList($model,'kelengkapan_SAP',array('ya'=>'Ya','tidak'=>'Tidak'),array('prompt' => 'Kelengkapan SAP')); ?>
		<?php echo $form->error($model,'kelengkapan_SAP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penyelenggara'); ?>
		<?php echo $form->textField($model,'penyelenggara',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'penyelenggara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ket_tambahan'); ?>
		<?php echo $form->textField($model,'ket_tambahan',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ket_tambahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->