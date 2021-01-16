<?php
/* @var $this HimpunanAlumniS2Controller */
/* @var $model HimpunanAlumniS2 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'himpunan-alumni-s2-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),//tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>


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

	<div class="row">
		<?php echo $form->labelEx($model,'himpunan_alumni'); ?>
		<?php echo $form->dropDownList($model,'himpunan_alumni',array('ada'=>'ada','tidak ada'=>'Tidak Ada'),array('prompt' => 'Pilih Himpunan Alumni')); ?>
		<?php echo $form->error($model,'himpunan_alumni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumbangan_dana'); ?>
		<?php echo $form->textArea($model,'sumbangan_dana',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sumbangan_dana'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumbangan_fasilitas'); ?>
		<?php echo $form->textArea($model,'sumbangan_fasilitas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sumbangan_fasilitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'masukan_perbaikan_pembelajaran'); ?>
		<?php echo $form->textArea($model,'masukan_perbaikan_pembelajaran',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'masukan_perbaikan_pembelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pengembangan_jejaring'); ?>
		<?php echo $form->textArea($model,'pengembangan_jejaring',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pengembangan_jejaring'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_kegiatan'); ?>
		<?php echo $form->textArea($model,'hasil_kegiatan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hasil_kegiatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
	</div>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tambah' : 'Simpan',array('class'=>'btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->