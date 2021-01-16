<?php
/* @var $this PengelolaanDanaController */
/* @var $model PengelolaanDana */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengelolaan-dana-form',
	'enableAjaxValidation'=>false,
	// tambahan
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// end tambahan
)); ?>

	<p class="note alert">Kolom bertanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model,$header='<b>Kesalahan Pengisian Data : </b>',$footer='',$htmlOptions=array('class'=>'alert alert-error')); ?>

<!-- tambahan -->
	<?php echo "<b>Tuliskan realisasi perolehan dan alokasi dana (termasuk hibah) dalam juta rupiah
				termasuk gaji, selama tiga tahun terakhir.</b>";?><br><br>
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
		<?php echo $form->labelEx($model,'sumber_dana'); ?>
		<?php echo $form->error($model,'sumber_dana'); ?>
		<?php echo $form->dropDownList($model,'sumber_dana',array('pt sendiri'=>'PT Sendiri','yayasan'=>'Yayasan','diknas'=>'Diknas','lain'=>'Lainnya'),array('prompt' => 'Pilih Sumber Dana')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_dana'); ?>
		<?php echo $form->error($model,'jenis_dana'); ?>
		<?php echo $form->textField($model,'jenis_dana',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_dana_TS2'); ?>
		<?php echo $form->error($model,'jumlah_dana_TS2'); ?>
		<?php echo $form->textField($model,'jumlah_dana_TS2',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_dana_TS1'); ?>
		<?php echo $form->error($model,'jumlah_dana_TS1'); ?>
		<?php echo $form->textField($model,'jumlah_dana_TS1',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_dana_TS'); ?>
		<?php echo $form->error($model,'jumlah_dana_TS'); ?>
		<?php echo $form->textField($model,'jumlah_dana_TS',array('size'=>10,'maxlength'=>10)); ?>
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