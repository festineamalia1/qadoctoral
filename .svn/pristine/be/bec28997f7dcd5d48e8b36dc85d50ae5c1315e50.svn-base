<?php
/* @var $this AlumniFisipolController */
/* @var $model AlumniFisipol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumni-fisipol-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>
<!--tambahan-->
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
		<?php echo $form->labelEx($model,'almNiu'); ?>
		<?php echo $form->textField($model,'almNiu'); ?>
		<?php echo $form->error($model,'almNiu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almNim'); ?>
		<?php echo $form->textField($model,'almNim',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almNim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almNama'); ?>
		<?php echo $form->textField($model,'almNama',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almNama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almAngkatan'); ?>
		<?php echo $form->textField($model,'almAngkatan',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almAngkatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almProdiKode'); ?>
		<?php echo $form->textField($model,'almProdiKode',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'almProdiKode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almProdiKodeUniv'); ?>
		<?php echo $form->textField($model,'almProdiKodeUniv',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'almProdiKodeUniv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTglMasuk'); ?>
		<?php echo $form->textField($model,'almTglMasuk'); ?>
		<?php echo $form->error($model,'almTglMasuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTglLulus'); ?>
		<?php echo $form->textField($model,'almTglLulus'); ?>
		<?php echo $form->error($model,'almTglLulus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almCuti'); ?>
		<?php echo $form->textField($model,'almCuti',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almCuti'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almLulusTahun'); ?>
		<?php echo $form->textField($model,'almLulusTahun',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almLulusTahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almLulusBulan'); ?>
		<?php echo $form->textField($model,'almLulusBulan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almLulusBulan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almSKS'); ?>
		<?php echo $form->textField($model,'almSKS'); ?>
		<?php echo $form->error($model,'almSKS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almIPK'); ?>
		<?php echo $form->textField($model,'almIPK',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'almIPK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTOEFEL'); ?>
		<?php echo $form->textArea($model,'almTOEFEL',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almTOEFEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almStatusLulus'); ?>
		<?php echo $form->textArea($model,'almStatusLulus',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almStatusLulus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almKodeLulus'); ?>
		<?php echo $form->textArea($model,'almKodeLulus',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almKodeLulus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almNoIjasah'); ?>
		<?php echo $form->textArea($model,'almNoIjasah',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almNoIjasah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almJudulSkripsi'); ?>
		<?php echo $form->textArea($model,'almJudulSkripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almJudulSkripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almPembimbing1'); ?>
		<?php echo $form->textArea($model,'almPembimbing1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almPembimbing1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almPembimbing2'); ?>
		<?php echo $form->textArea($model,'almPembimbing2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almPembimbing2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almPembimbing3'); ?>
		<?php echo $form->textArea($model,'almPembimbing3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almPembimbing3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almJenisKelamin'); ?>
		<?php echo $form->textArea($model,'almJenisKelamin',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almJenisKelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almAlamatEmail'); ?>
		<?php echo $form->textArea($model,'almAlamatEmail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almAlamatEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almAgama'); ?>
		<?php echo $form->textArea($model,'almAgama',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almAgama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTempatLahir'); ?>
		<?php echo $form->textArea($model,'almTempatLahir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almTempatLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTglLahir'); ?>
		<?php echo $form->textArea($model,'almTglLahir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almTglLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almBlnLahir'); ?>
		<?php echo $form->textArea($model,'almBlnLahir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almBlnLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almThnLahir'); ?>
		<?php echo $form->textArea($model,'almThnLahir',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almThnLahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almAlamat'); ?>
		<?php echo $form->textArea($model,'almAlamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almAlamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almTlp'); ?>
		<?php echo $form->textArea($model,'almTlp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almTlp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almStatusKawin'); ?>
		<?php echo $form->textField($model,'almStatusKawin',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'almStatusKawin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almPekerjaan'); ?>
		<?php echo $form->textArea($model,'almPekerjaan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almPekerjaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almWargaNegara'); ?>
		<?php echo $form->textField($model,'almWargaNegara',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'almWargaNegara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almBiaya'); ?>
		<?php echo $form->textField($model,'almBiaya',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'almBiaya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almKetBiaya'); ?>
		<?php echo $form->textField($model,'almKetBiaya',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'almKetBiaya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almNamaOrtu'); ?>
		<?php echo $form->textField($model,'almNamaOrtu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'almNamaOrtu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almPekerjaanOrtu'); ?>
		<?php echo $form->textField($model,'almPekerjaanOrtu',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'almPekerjaanOrtu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almAlamatOrtu'); ?>
		<?php echo $form->textArea($model,'almAlamatOrtu',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'almAlamatOrtu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'almStakmhsrKode'); ?>
		<?php echo $form->textField($model,'almStakmhsrKode',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'almStakmhsrKode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->