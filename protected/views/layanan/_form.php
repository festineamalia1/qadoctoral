<?php
/* @var $this LayananController */
/* @var $model Layanan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'layanan-form',
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
<!-- end tambahan -->

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_BK'); ?>
		<?php echo $form->error($model,'kegiatan_BK'); ?>
		<?php echo $form->textArea($model,'kegiatan_BK',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan_BK'); ?>
		<?php echo $form->error($model,'pelaksanaan_BK'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_BK',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_BK'); ?>
		<?php echo $form->error($model,'hasil_BK'); ?>
		<?php echo $form->textArea($model,'hasil_BK',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_minat'); ?>
		<?php echo $form->error($model,'kegiatan_minat'); ?>
		<?php echo $form->textArea($model,'kegiatan_minat',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan_minat'); ?>
		<?php echo $form->error($model,'pelaksanaan_minat'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_minat',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_minat'); ?>
		<?php echo $form->error($model,'hasil_minat'); ?>
		<?php echo $form->textArea($model,'hasil_minat',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_softskill'); ?>
		<?php echo $form->error($model,'kegiatan_softskill'); ?>
		<?php echo $form->textArea($model,'kegiatan_softskill',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan_softskill'); ?>
		<?php echo $form->error($model,'pelaksanaan_softskill'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_softskill',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_softskill'); ?>
		<?php echo $form->error($model,'hasil_softskill'); ?>
		<?php echo $form->textArea($model,'hasil_softskill',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_beasiswa'); ?>
		<?php echo $form->error($model,'kegiatan_beasiswa'); ?>
		<?php echo $form->textArea($model,'kegiatan_beasiswa',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan_beasiswa'); ?>
		<?php echo $form->error($model,'pelaksanaan_beasiswa'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_beasiswa',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_beasiswa'); ?>
		<?php echo $form->error($model,'hasil_beasiswa'); ?>
		<?php echo $form->textArea($model,'hasil_beasiswa',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kegiatan_kesehatan'); ?>
		<?php echo $form->error($model,'kegiatan_kesehatan'); ?>
		<?php echo $form->textArea($model,'kegiatan_kesehatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pelaksanaan_kesehatan'); ?>
		<?php echo $form->error($model,'pelaksanaan_kesehatan'); ?>
		<?php echo $form->textArea($model,'pelaksanaan_kesehatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasil_kesehatan'); ?>
		<?php echo $form->error($model,'hasil_kesehatan'); ?>
		<?php echo $form->textArea($model,'hasil_kesehatan',array('class'=>'input-xxlarge','rows'=>6, 'cols'=>50)); ?>
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