<?php
/* @var $this MahasiswaS3Controller */
/* @var $model MahasiswaS3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-s3-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

	<?php echo "<b>Tuliskan data seluruh mahasiswa reguler dan lulusanya dalam lima tahun terakhir.</b>";?><br><br>

	<div class="row">
		<?php echo $form->labelEx($model,'NIF'); ?>
		<?php echo $form->error($model,'NIF'); ?>
		<?php echo $form->textField($model,'NIF',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_mhs_s3'); ?>
		<?php echo $form->error($model,'nama_mhs_s3'); ?>
		<?php echo $form->textField($model,'nama_mhs_s3',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_mhs'); ?>
		<?php echo $form->error($model,'alamat_mhs'); ?>
		<?php echo $form->textArea($model,'alamat_mhs',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'daerah_asal'); ?>
		<?php echo $form->error($model,'daerah_asal'); ?>
		<?php echo $form->textField($model,'daerah_asal',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_lahir'); ?>
		<?php echo $form->error($model,'tgl_lahir'); ?>
		<?php echo $form->textField($model,'tgl_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_administrasi'); ?>
		<?php echo $form->error($model,'id_administrasi'); ?>
		<?php echo $form->dropDownList($model, 'id_administrasi', CHtml::listData(
		Administrasi::model()->findAll(), 'id_administrasi', 'th_akademik'),
		array('prompt' => 'Pilih Tahun')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prodi'); ?>
				<?php echo $form->error($model,'id_prodi'); ?>
				<?php echo $form->dropDownList($model, 'id_prodi', CHtml::listData(
				Prodi::model()->findAll(), 'id_prodi', 'nama_prodi'),
				array('prompt' => 'Pilih Prodi')
				); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
		<?php echo $form->dropDownList($model,'jenis_kelamin',array('perempuan'=>'perempuan','laki-laki'=>'laki-laki'),array('prompt' => 'Pilih Jenis Kelamin')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warga_negara'); ?>
		<?php echo $form->textField($model,'warga_negara',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'warga_negara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIU'); ?>
		<?php echo $form->textField($model,'NIU'); ?>
		<?php echo $form->error($model,'NIU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pekerjaan'); ?>
		<?php echo $form->textField($model,'pekerjaan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_masuk'); ?>
		<?php echo $form->textField($model,'tgl_masuk'); ?>
		<?php echo $form->error($model,'tgl_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_ortu'); ?>
		<?php echo $form->textField($model,'nama_ortu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_ortu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->