<?php
/* @var $this PeninjauanKurikulumController */
/* @var $model PeninjauanKurikulum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'peninjauan-kurikulum-form',
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

	<div class="row">
		<?php echo $form->labelEx($model,'kode_mk'); ?>
		<?php echo $form->dropDownList($model, 'kode_mk', CHtml::listData(
		MkKurikulum::model()->findAll(), 'kode_mk', 'kode_mk'),
		array('prompt' => 'Pilih Kode MK')
		); ?>
	</div>
<!-- end tambahan -->
	

	<div class="row">
		<?php echo $form->labelEx($model,'status_mk'); ?>
		<?php echo $form->dropDownList($model,'status_mk',array('lama'=>'Lama','baru'=>'Baru','hapus'=>'Hapus'),array('prompt' => 'Pilih Status MK')); ?>
		<?php echo $form->error($model,'status_mk'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'perubahan_silabus'); ?>
		<?php echo $form->dropDownList($model,'perubahan_silabus',array('ada'=>'Ada','belum ada'=>'Belum Ada'),array('prompt' => 'Pilih Perubahan Silabus')); ?>
		<?php echo $form->error($model,'perubahan_silabus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perubahan_buku_ajar'); ?>
		<?php echo $form->dropDownList($model,'perubahan_buku_ajar',array('ada'=>'Ada','belum ada'=>'Belum Ada'),array('prompt' => 'Pilih Perubahan Silabus')); ?>
		<?php echo $form->error($model,'perubahan_buku_ajar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alasan_peninjauan'); ?>
		<?php echo $form->textField($model,'alasan_peninjauan',array('class'=>'input-xxlarge','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alasan_peninjauan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pengusul'); ?>
		<?php echo $form->textField($model,'pengusul',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pengusul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'berlaku_mulai'); ?><?php echo '(contoh: I/2011-2012)'?><br>
		<?php echo $form->textField($model,'berlaku_mulai',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'berlaku_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sumber_data'); ?>
		<?php echo $form->textField($model,'sumber_data',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'sumber_data'); ?>
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